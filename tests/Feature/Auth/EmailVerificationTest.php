<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $this->markTestSkipped('Route /verify-email tidak digunakan (Filament auth).');
    }

    public function test_email_can_be_verified()
    {
        $this->markTestSkipped('Email verification tidak digunakan (Filament auth).');
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $this->markTestSkipped('Email verification tidak digunakan (Filament auth).');
    }
}
