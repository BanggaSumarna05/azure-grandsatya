<?php

namespace Database\Seeders;

use App\Models\GalleryPhoto;
use Illuminate\Database\Seeder;

class GalleryPhotoSeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            // Fleet — Kendaraan
            [
                'photo'    => '/anyar/img/gallery/alphard-fleet.jpg',
                'caption'  => 'Toyota Alphard — Rental Mobil Eksekutif',
                'category' => 'fleet',
                'order'    => 1,
            ],
            [
                'photo'    => '/anyar/img/gallery/fortuner-fleet.jpg',
                'caption'  => 'Toyota Fortuner — Rental Mobil Operasional',
                'category' => 'fleet',
                'order'    => 2,
            ],
            [
                'photo'    => '/anyar/img/gallery/hiace-fleet.jpg',
                'caption'  => 'Toyota Hiace — Antar Jemput Karyawan',
                'category' => 'fleet',
                'order'    => 3,
            ],
            [
                'photo'    => '/anyar/img/gallery/hilux-fleet.jpg',
                'caption'  => 'Toyota Hilux Double Cabin — Kendaraan Proyek',
                'category' => 'fleet',
                'order'    => 4,
            ],
            [
                'photo'    => '/anyar/img/gallery/dump-truck.jpg',
                'caption'  => 'Dump Truck Hino — Angkutan Material Proyek',
                'category' => 'fleet',
                'order'    => 5,
            ],
            // Fleet — Alat Berat
            [
                'photo'    => '/anyar/img/gallery/excavator.jpg',
                'caption'  => 'Excavator Komatsu PC200 — Rental Alat Berat',
                'category' => 'fleet',
                'order'    => 6,
            ],
            [
                'photo'    => '/anyar/img/gallery/bulldozer.jpg',
                'caption'  => 'Bulldozer Komatsu D85 — Perataan Lahan',
                'category' => 'fleet',
                'order'    => 7,
            ],
            [
                'photo'    => '/anyar/img/gallery/crane.jpg',
                'caption'  => 'Mobile Crane Tadano 25 Ton — Pengangkatan Struktur',
                'category' => 'fleet',
                'order'    => 8,
            ],
            // Service
            [
                'photo'    => '/anyar/img/gallery/service-1.jpg',
                'caption'  => 'Mobilisasi alat berat ke lokasi proyek konstruksi',
                'category' => 'service',
                'order'    => 9,
            ],
            [
                'photo'    => '/anyar/img/gallery/service-2.jpg',
                'caption'  => 'Inspeksi unit sebelum pengiriman ke klien',
                'category' => 'service',
                'order'    => 10,
            ],
            [
                'photo'    => '/anyar/img/gallery/service-3.jpg',
                'caption'  => 'Operasional kendaraan proyek di lapangan tambang',
                'category' => 'service',
                'order'    => 11,
            ],
            // Events
            [
                'photo'    => '/anyar/img/gallery/event-1.jpg',
                'caption'  => 'Serah terima unit rental kepada klien korporasi',
                'category' => 'events',
                'order'    => 12,
            ],
            [
                'photo'    => '/anyar/img/gallery/event-2.jpg',
                'caption'  => 'Pelatihan operator alat berat bersertifikat SIO',
                'category' => 'events',
                'order'    => 13,
            ],
        ];

        foreach ($photos as $photo) {
            GalleryPhoto::create($photo);
        }
    }
}
