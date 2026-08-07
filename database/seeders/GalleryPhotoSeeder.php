<?php

namespace Database\Seeders;

use App\Models\GalleryPhoto;
use Illuminate\Database\Seeder;

class GalleryPhotoSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            // Armada
            [
                'photo'    => '/anyar/img/gallery/armada-1.jpg',
                'caption'  => 'Armada Lexus ES 300h siap melayani',
                'category' => 'Armada',
                'order'    => 1,
            ],
            [
                'photo'    => '/anyar/img/gallery/armada-2.jpg',
                'caption'  => 'Interior Toyota Alphard yang mewah',
                'category' => 'Armada',
                'order'    => 2,
            ],
            [
                'photo'    => '/anyar/img/gallery/armada-3.jpg',
                'caption'  => 'Toyota Fortuner untuk perjalanan tangguh',
                'category' => 'Armada',
                'order'    => 3,
            ],
            [
                'photo'    => '/anyar/img/gallery/armada-4.jpg',
                'caption'  => 'Hiace berkapasitas besar untuk grup',
                'category' => 'Armada',
                'order'    => 4,
            ],
            // Layanan
            [
                'photo'    => '/anyar/img/gallery/layanan-1.jpg',
                'caption'  => 'Layanan airport transfer profesional',
                'category' => 'Layanan',
                'order'    => 5,
            ],
            [
                'photo'    => '/anyar/img/gallery/layanan-2.jpg',
                'caption'  => 'Antar jemput karyawan perusahaan',
                'category' => 'Layanan',
                'order'    => 6,
            ],
            [
                'photo'    => '/anyar/img/gallery/layanan-3.jpg',
                'caption'  => 'Transportasi acara korporat',
                'category' => 'Layanan',
                'order'    => 7,
            ],
            // Kegiatan
            [
                'photo'    => '/anyar/img/gallery/kegiatan-1.jpg',
                'caption'  => 'Pelatihan keselamatan berkendara tim driver',
                'category' => 'Kegiatan',
                'order'    => 8,
            ],
            [
                'photo'    => '/anyar/img/gallery/kegiatan-2.jpg',
                'caption'  => 'Servis rutin armada di bengkel resmi',
                'category' => 'Kegiatan',
                'order'    => 9,
            ],
            [
                'photo'    => '/anyar/img/gallery/kegiatan-3.jpg',
                'caption'  => 'Kunjungan klien korporat ke kantor Grand Satya',
                'category' => 'Kegiatan',
                'order'    => 10,
            ],
        ];

        foreach ($photos as $photo) {
            GalleryPhoto::create($photo);
        }
    }
}
