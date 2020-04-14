<?php

namespace Tests\Feature;

use App\Setting;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SecuritySettingsTest extends TestCase
{
    /** @test */
    public function an_authenticated_user_cannot_access_security_settings()
    {
        $this->get('/settings#security')
            ->assertStatus(302)
            ->assertRedirect('/login');
    }

    /** @test */
    public function current_password_is_required_to_reset_password()
    {
        $this->withExceptionHandling()->signIn();

        $this->updateSettings(['current_password' => ''])
            ->assertSessionHasErrors('current_password');
    }

    /** @test */
    public function current_password_is_must_be_match_login_user_password()
    {
        $current_password = $this->getSignInPassword();

        $this->updateSettings(['current_password' => 'wrong_password'])
            ->assertSessionHasErrors('current_password');

        $this->updateSettings(['current_password' => $current_password])
            ->assertSessionDoesntHaveErrors('current_password');
    }

    /** @test */
    public function new_password_is_required_to_reset_password()
    {
        $invalid_reset_password_data = [
            'current_password' => $this->getSignInPassword(),
            'password' => '',
        ];

        $this->updateSettings($invalid_reset_password_data)->assertSessionHasErrors('password');
    }


    /** @test */
    public function new_password_is_need_to_match_confirm_password()
    {
        $invalid_data = [
            'current_password' => $this->getSignInPassword(),
            'password' => \Str::random(8),
            'password_confirmation' => \Str::random(8),
        ];

        $valid_data = [
            'current_password' => $this->getSignInPassword(),
            'password' => $password = \Str::random(8),
            'password_confirmation' => $password,
        ];

        $this->updateSettings($invalid_data)->assertSessionHasErrors('password');
        $this->updateSettings($valid_data)->assertSessionDoesntHaveErrors('password');
    }

    /** @test */
    public function password_reset_with_valid_data()
    {
        $new_password = \Str::random(8);

        $valid_data = [
            'current_password' => $this->getSignInPassword(),
            'password' => $new_password,
            'password_confirmation' => $new_password,
        ];

        $this->updateSettings($valid_data)->assertSessionDoesntHaveErrors('password');
        $this->assertTrue(\Hash::check($new_password, auth()->user()->password));
    }


    protected function getSignInPassword()
    {
        $current_password = \Str::random(8);

        $this->withExceptionHandling()
            ->signIn(make(\App\User::class, ['password' => \Hash::make($current_password)]));

        return $current_password;
    }

    protected function updateSettings($overrides = [])
    {
        return $this->post(route('settings.update.security'), raw(Setting::class, $overrides));
    }
}
