<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $this->markTestSkipped('Route /confirm-password tidak digunakan (Filament auth).');
    }

    public function test_password_can_be_confirmed()
    {
        $this->markTestSkipped('Route /confirm-password tidak digunakan (Filament auth).');
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $this->markTestSkipped('Route /confirm-password tidak digunakan (Filament auth).');
    }
}
