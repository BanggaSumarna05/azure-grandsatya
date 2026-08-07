<?php

namespace Database\Seeders;

use App\Models\Fleet;
use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    public function run(): void
    {
        $fleets = [
            [
                'name'        => 'Lexus ES 300h',
                'class'       => 'Eksekutif',
                'capacity'    => 4,
                'photo'       => '/anyar/img/cars/Lexus.jpeg',
                'description' => 'Kendaraan eksekutif premium untuk perjalanan bisnis yang nyaman dan prestisius. Dilengkapi dengan interior mewah dan teknologi terkini.',
            ],
            [
                'name'        => 'Toyota Alphard',
                'class'       => 'Eksekutif',
                'capacity'    => 7,
                'photo'       => '/anyar/img/cars/alphard.jpeg',
                'description' => 'Minivan mewah pilihan para eksekutif dan tamu VIP. Menawarkan kenyamanan kelas satu dengan ruang kabin yang luas.',
            ],
            [
                'name'        => 'Toyota Innova Zenix',
                'class'       => 'MPV',
                'capacity'    => 7,
                'photo'       => '/anyar/img/cars/innova.jpeg',
                'description' => 'MPV handal untuk perjalanan keluarga maupun korporat. Kenyamanan tinggi dengan konsumsi bahan bakar yang efisien.',
            ],
            [
                'name'        => 'Toyota Avanza',
                'class'       => 'MPV',
                'capacity'    => 7,
                'photo'       => '/anyar/img/cars/avanza.jpeg',
                'description' => 'Kendaraan keluarga yang luas dan nyaman untuk perjalanan grup dengan harga yang terjangkau.',
            ],
            [
                'name'        => 'Toyota Corolla Cross',
                'class'       => 'SUV',
                'capacity'    => 5,
                'photo'       => '/anyar/img/cars/corolla cross.jpeg',
                'description' => 'Kendaraan SUV yang tangguh dan nyaman untuk berbagai medan. Cocok untuk perjalanan jauh maupun dalam kota.',
            ],
            [
                'name'        => 'Toyota Fortuner',
                'class'       => 'SUV',
                'capacity'    => 7,
                'photo'       => '/anyar/img/cars/fortuner.jpeg',
                'description' => 'SUV besar yang tangguh untuk semua jenis medan. Memberikan rasa aman dan nyaman di setiap perjalanan.',
            ],
            [
                'name'        => 'Daihatsu Hiace',
                'class'       => 'Van',
                'capacity'    => 15,
                'photo'       => '/anyar/img/cars/hiace.jpeg',
                'description' => 'Kendaraan van berkapasitas besar, ideal untuk perjalanan grup, wisata, dan acara perusahaan.',
            ],
            [
                'name'        => 'Mercedes-Benz Sprinter',
                'class'       => 'Van',
                'capacity'    => 16,
                'photo'       => '/anyar/img/cars/sprinter.jpeg',
                'description' => 'Van premium berkapasitas besar dengan kenyamanan tinggi, cocok untuk perjalanan korporat dan airport transfer grup.',
            ],
        ];

        foreach ($fleets as $fleet) {
            Fleet::create($fleet);
        }
    }
}
