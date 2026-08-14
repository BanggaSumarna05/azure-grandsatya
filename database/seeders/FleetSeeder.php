<?php

namespace Database\Seeders;

use App\Models\Fleet;
use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    public function run(): void
    {
        Fleet::truncate(); // pastikan tidak duplikat

        $fleets = [

            // ── MOBIL EKSEKUTIF ─────────────────────────────────────────
            [
                'name'        => 'Toyota Alphard',
                'class'       => 'Mobil Eksekutif',
                'capacity'    => 7,
                'photo'       => 'fleets/alphard.jpg',
                'description' => 'Minivan mewah pilihan eksekutif dan tamu VIP. Kabin luas dengan kenyamanan kelas satu, cocok untuk perjalanan pimpinan dan tamu penting perusahaan.',
            ],
            [
                'name'        => 'Toyota Camry',
                'class'       => 'Mobil Eksekutif',
                'capacity'    => 4,
                'photo'       => 'fleets/camry.jpg',
                'description' => 'Sedan eksekutif elegan untuk perjalanan bisnis. Representatif dan berkesan untuk tamu VIP maupun kunjungan direksi.',
            ],
            [
                'name'        => 'Toyota Fortuner',
                'class'       => 'Mobil Eksekutif',
                'capacity'    => 7,
                'photo'       => 'fleets/fortuner.jpg',
                'description' => 'SUV premium tangguh bergaya tinggi. Cocok untuk site visit ke lokasi proyek sekaligus pertemuan bisnis resmi.',
            ],

            // ── MOBIL OPERASIONAL ────────────────────────────────────────
            [
                'name'        => 'Toyota Innova Zenix',
                'class'       => 'Mobil Operasional',
                'capacity'    => 7,
                'photo'       => 'fleets/innova.jpg',
                'description' => 'MPV handal untuk operasional harian perusahaan. Efisien, nyaman, tersedia dalam jumlah banyak untuk kebutuhan armada korporasi.',
            ],
            [
                'name'        => 'Toyota Avanza',
                'class'       => 'Mobil Operasional',
                'capacity'    => 7,
                'photo'       => 'fleets/avanza.jpg',
                'description' => 'Kendaraan operasional serbaguna dengan kapasitas cukup besar. Pilihan ekonomis untuk operasional harian perusahaan.',
            ],
            [
                'name'        => 'Toyota Hiace',
                'class'       => 'Mobil Operasional',
                'capacity'    => 15,
                'photo'       => 'fleets/hiace.jpg',
                'description' => 'Van berkapasitas besar, ideal untuk antar jemput karyawan, perjalanan tim, dan shuttle acara perusahaan.',
            ],

            // ── KENDARAAN PROYEK ─────────────────────────────────────────
            [
                'name'        => 'Toyota Hilux Double Cabin',
                'class'       => 'Kendaraan Proyek',
                'capacity'    => 4,
                'photo'       => 'fleets/hilux.jpg',
                'description' => 'Pickup double cabin 4WD tangguh untuk operasional di medan proyek. Cocok untuk inspeksi lapangan, logistik ringan, dan mobilitas tim proyek.',
            ],
            [
                'name'        => 'Dump Truck Hino 220',
                'class'       => 'Kendaraan Proyek',
                'capacity'    => 20,
                'photo'       => 'fleets/dump-truck.jpg',
                'description' => 'Dump truck kapasitas 20 ton untuk pengangkutan material proyek konstruksi, pertambangan, dan pengerukan tanah.',
            ],
            [
                'name'        => 'Truk Tronton Fuso',
                'class'       => 'Kendaraan Proyek',
                'capacity'    => 30,
                'photo'       => 'fleets/tronton.jpg',
                'description' => 'Truk tronton berkapasitas besar untuk pengiriman material jarak jauh dan distribusi logistik proyek industri skala besar.',
            ],
            [
                'name'        => 'Tangki Truck Hino',
                'class'       => 'Kendaraan Proyek',
                'capacity'    => 8,
                'photo'       => 'fleets/tangki.jpg',
                'description' => 'Truk tangki kapasitas 8.000 liter untuk distribusi BBM, air, atau bahan cair di lokasi proyek tambang, konstruksi, dan migas.',
            ],

            // ── ALAT BERAT ───────────────────────────────────────────────
            [
                'name'        => 'Excavator Komatsu PC200',
                'class'       => 'Alat Berat',
                'capacity'    => 20,
                'photo'       => 'fleets/excavator-pc200.jpg',
                'description' => 'Excavator 20 ton paling populer di industri konstruksi dan pertambangan. Digunakan untuk galian, pengerukan, land clearing, dan loading material. Tersedia dengan operator bersertifikat SIO.',
            ],
            [
                'name'        => 'Excavator Komatsu PC300',
                'class'       => 'Alat Berat',
                'capacity'    => 30,
                'photo'       => 'fleets/excavator-pc300.jpg',
                'description' => 'Excavator 30 ton untuk pekerjaan berat di pertambangan dan proyek infrastruktur skala besar. Produktivitas tinggi dengan bucket kapasitas besar.',
            ],
            [
                'name'        => 'Bulldozer Komatsu D85',
                'class'       => 'Alat Berat',
                'capacity'    => 1,
                'photo'       => 'fleets/bulldozer-d85.jpg',
                'description' => 'Bulldozer medium untuk perataan lahan, pembersihan area, dan reklamasi. Cocok untuk proyek konstruksi jalan, tambang, dan land development.',
            ],
            [
                'name'        => 'Bulldozer Komatsu D155',
                'class'       => 'Alat Berat',
                'capacity'    => 1,
                'photo'       => 'fleets/bulldozer-d155.jpg',
                'description' => 'Bulldozer berat untuk pekerjaan tambang dan infrastruktur skala besar. Tenaga besar untuk mendorong material keras dan pembersihan lahan luas.',
            ],
            [
                'name'        => 'Motor Grader Komatsu GD705',
                'class'       => 'Alat Berat',
                'capacity'    => 1,
                'photo'       => 'fleets/grader-gd705.jpg',
                'description' => 'Motor grader untuk pengerjaan dan perawatan jalan proyek, perataan permukaan, serta pembentukan saluran drainase dengan presisi tinggi.',
            ],
            [
                'name'        => 'Vibro Compactor Dynapac CA250',
                'class'       => 'Alat Berat',
                'capacity'    => 1,
                'photo'       => 'fleets/compactor-ca250.jpg',
                'description' => 'Vibro compactor untuk pemadatan tanah dan aspal. Digunakan dalam pengerjaan jalan, landasan, area parkir, dan fondasi bangunan.',
            ],
            [
                'name'        => 'Wheel Loader Komatsu WA380',
                'class'       => 'Alat Berat',
                'capacity'    => 3,
                'photo'       => 'fleets/wheel-loader.jpg',
                'description' => 'Wheel loader kapasitas bucket 3 m³ untuk loading material ke dump truck, penanganan agregat, dan pekerjaan loading di tambang dan quarry.',
            ],
            [
                'name'        => 'Mobile Crane Tadano 25 Ton',
                'class'       => 'Alat Berat',
                'capacity'    => 25,
                'photo'       => 'fleets/crane-25t.jpg',
                'description' => 'Mobile crane kapasitas 25 ton untuk pengangkatan dan pemasangan struktur, pemindahan material berat, dan erection di lokasi proyek.',
            ],
            [
                'name'        => 'Mobile Crane Tadano 50 Ton',
                'class'       => 'Alat Berat',
                'capacity'    => 50,
                'photo'       => 'fleets/crane-50t.jpg',
                'description' => 'Mobile crane kapasitas 50 ton untuk pekerjaan pengangkatan berat di proyek gedung bertingkat, jembatan, dan instalasi peralatan industri besar.',
            ],
            [
                'name'        => 'Forklift Toyota 3 Ton',
                'class'       => 'Alat Berat',
                'capacity'    => 3,
                'photo'       => 'fleets/forklift-3t.jpg',
                'description' => 'Forklift 3 ton untuk pemindahan dan penumpukan material di gudang, pelabuhan, dan area logistik proyek industri.',
            ],
            [
                'name'        => 'Concrete Pump Truck Putzmeister',
                'class'       => 'Alat Berat',
                'capacity'    => 1,
                'photo'       => 'fleets/concrete-pump.jpg',
                'description' => 'Concrete pump truck untuk pengecoran beton jarak jauh dan tempat tinggi. Tersedia boom 36 meter dan 42 meter untuk berbagai kebutuhan konstruksi.',
            ],
        ];

        foreach ($fleets as $fleet) {
            Fleet::create($fleet);
        }
    }
}
