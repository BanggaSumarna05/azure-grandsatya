<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name'  => 'Yusmaniar Octavia',
                'role'  => 'Sales & Operations',
                'photo' => '/anyar/img/team/team-1.jpg',
                'bio'   => 'Berpengalaman di bidang transportasi korporat selama lebih dari 10 tahun. Menangani operasional harian dan koordinasi dengan klien perusahaan.',
            ],
            [
                'name'  => 'Andi Prasetyo',
                'role'  => 'Fleet Manager',
                'photo' => '/anyar/img/team/team-2.jpg',
                'bio'   => 'Bertanggung jawab atas pengelolaan armada dan pemeliharaan kendaraan agar selalu dalam kondisi prima dan siap beroperasi.',
            ],
            [
                'name'  => 'Siti Rahma',
                'role'  => 'Customer Service',
                'photo' => '/anyar/img/team/team-3.jpg',
                'bio'   => 'Siap melayani kebutuhan klien 24 jam. Berpengalaman dalam menangani permintaan pemesanan dan memberikan solusi terbaik bagi pelanggan.',
            ],
            [
                'name'  => 'Dedy Kurniawan',
                'role'  => 'Senior Driver',
                'photo' => '/anyar/img/team/team-4.jpg',
                'bio'   => 'Driver profesional berpengalaman lebih dari 8 tahun. Terlatih dalam keselamatan berkendara dan memberikan pelayanan yang ramah kepada penumpang.',
            ],
            [
                'name'  => 'Rina Wulandari',
                'role'  => 'Marketing Manager',
                'photo' => '/anyar/img/team/team-5.jpg',
                'bio'   => 'Mengelola strategi pemasaran dan pengembangan bisnis Grand Satya. Berpengalaman dalam membangun kemitraan korporat jangka panjang.',
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }
}
