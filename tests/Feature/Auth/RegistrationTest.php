<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        // Proyek ini menggunakan Filament untuk auth — route /register tidak tersedia.
        $this->markTestSkipped('Route /register tidak digunakan (Filament auth).');
    }

    public function test_new_users_can_register()
    {
        // Proyek ini menggunakan Filament untuk auth — registrasi publik tidak tersedia.
        $this->markTestSkipped('Route /register tidak digunakan (Filament auth).');
    }
}
