<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        // Proyek ini menggunakan Filament — login ada di /admin/login, bukan /login.
        $this->markTestSkipped('Route /login tidak digunakan (Filament auth di /admin/login).');
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {
        $this->markTestSkipped('Route /login tidak digunakan (Filament auth).');
    }

    public function test_users_can_not_authenticate_with_invalid_password()
    {
        $this->markTestSkipped('Route /login tidak digunakan (Filament auth).');
    }
}
