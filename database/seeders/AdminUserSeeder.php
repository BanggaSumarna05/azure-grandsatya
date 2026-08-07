<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@grandsatya.com'],
            [
                'nama'       => 'Admin Grand Satya',
                'email'      => 'admin@grandsatya.com',
                'password'   => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        $this->command->info('Admin user created: admin@grandsatya.com / admin123');
    }
}
