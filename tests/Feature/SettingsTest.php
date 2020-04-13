<?php

namespace Tests\Feature\Settings;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SettingsTest extends TestCase
{
    /** @test */
    public function an_unauthenticated_user_cannot_access_settings_page()
    {
        $this->get('/settings')
            ->assertStatus(302)
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_access_settings_page()
    {
        $this->signIn(make(\App\User::class));
        $this->get('/settings')->assertStatus(200);
    }
}
