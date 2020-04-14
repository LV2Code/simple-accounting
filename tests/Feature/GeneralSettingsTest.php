<?php

namespace Tests\Feature\Settings;

use App\Setting;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class GeneralSettingsTest extends TestCase
{

    /** @test */
    public function an_authenticated_user_can_fetch_general_settings()
    {
        $this->signIn();
        $this->get('/settings')->assertSee(Setting::all()[0]['value']);
    }

    /** @test */
    public function general_settings_company_name_validations()
    {
        $settings = raw(Setting::class, ['company_name' => '']);
        $this->updateSettings($settings)->assertSessionHasErrors('company_name');
    }

    /** @test */
    public function general_settings_street_validations()
    {
        $settings = raw(Setting::class, ['street' => '']);
        $this->updateSettings($settings)->assertSessionHasErrors('street');
    }

    /** @test */
    public function general_settings_city_validations()
    {
        $settings = raw(Setting::class, ['city' => '']);
        $this->updateSettings($settings)->assertSessionHasErrors('city');
    }

    /** @test */
    public function general_settings_state_validations()
    {
        $settings = raw(Setting::class, ['state' => '']);
        $this->updateSettings($settings)->assertSessionHasErrors('state');
    }

    /** @test */
    public function general_settings_requires_zip_code()
    {
        $settings = raw(Setting::class, ['zip_code' => '']);
        $this->updateSettings($settings)->assertSessionHasErrors('zip_code');
    }

    /** @test */
    public function general_settings_created_with_valid_data()
    {
        $settings = raw(Setting::class);

        $this->updateSettings($settings)
            ->assertSessionHasNoErrors()
            ->assertSessionHas('success');

        $this->get('/settings')->assertSee($settings['company_name']);
    }


    protected function updateSettings($overrides = [])
    {
        $this->withExceptionHandling()->signIn();

        $settings = make(Setting::class, $overrides);

        return $this->post(route('settings.update.general'), $settings->toArray());
    }
}
