<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GrandSatyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Delegates to individual seeders.
     */
    public function run(): void
    {
        $this->call([
            FleetSeeder::class,
            GalleryPhotoSeeder::class,
            BlogPostSeeder::class,
        ]);
    }
}
