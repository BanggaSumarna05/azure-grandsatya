<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title'        => 'Tips Memilih Jasa Transportasi Korporat yang Tepat',
                'excerpt'      => 'Memilih jasa transportasi korporat yang tepat adalah kunci kelancaran operasional bisnis Anda. Berikut beberapa tips yang perlu diperhatikan.',
                'content'      => '<p>Dalam dunia bisnis yang dinamis, transportasi korporat memegang peranan penting dalam menjaga kelancaran operasional perusahaan. Pemilihan mitra transportasi yang tepat bukan sekadar soal harga, tetapi juga menyangkut keandalan, kenyamanan, dan profesionalisme.</p>

<h2>1. Pastikan Legalitas dan Perizinan</h2>
<p>Hal pertama yang perlu dicek adalah legalitas perusahaan transportasi tersebut. Pastikan mereka memiliki izin operasional yang lengkap dan armada yang terdaftar resmi. Ini menjamin keamanan dan perlindungan hukum bagi perusahaan Anda.</p>

<h2>2. Cek Kondisi dan Kelengkapan Armada</h2>
<p>Armada yang prima mencerminkan komitmen perusahaan transportasi terhadap layanan. Tanyakan tentang jadwal perawatan berkala, usia kendaraan, dan fasilitas yang tersedia di setiap unit.</p>

<h2>3. Evaluasi Rekam Jejak dan Reputasi</h2>
<p>Cari tahu pengalaman klien sebelumnya. Ulasan dan testimoni dari perusahaan lain yang pernah menggunakan jasa mereka adalah indikator terpercaya atas kualitas layanan yang akan Anda terima.</p>

<h2>4. Pertimbangkan Fleksibilitas Layanan</h2>
<p>Kebutuhan transportasi korporat sering berubah. Pilih mitra yang mampu menyesuaikan layanan—baik dalam hal jumlah armada, rute, maupun jadwal—sesuai dinamika bisnis Anda.</p>

<h2>5. Transparansi Harga dan Kontrak</h2>
<p>Hindari jasa transportasi yang tidak transparan dalam penentuan harga. Kontrak yang jelas melindungi kedua belah pihak dan menghindari potensi sengketa di kemudian hari.</p>

<p>Grand Satya hadir sebagai solusi transportasi korporat terpercaya dengan armada modern, pengemudi profesional, dan layanan yang dapat disesuaikan dengan kebutuhan bisnis Anda.</p>',
                'photo'        => '/anyar/img/blog/blog-1.jpg',
                'published_at' => now()->subDays(30),
            ],
            [
                'title'        => 'Keunggulan Layanan Airport Transfer Profesional',
                'excerpt'      => 'Airport transfer bukan sekadar antar jemput. Dengan layanan profesional, setiap perjalanan ke dan dari bandara menjadi pengalaman yang nyaman dan bebas stres.',
                'content'      => '<p>Perjalanan bisnis sering kali dimulai dan diakhiri di bandara. Layanan airport transfer yang profesional tidak hanya memastikan Anda tiba tepat waktu, tetapi juga memberikan ketenangan pikiran sepanjang perjalanan.</p>

<h2>Punctuality adalah Segalanya</h2>
<p>Keterlambatan dalam menjemput tamu perusahaan di bandara dapat memberikan kesan buruk sejak awal. Driver kami selalu memantau jadwal penerbangan secara real-time dan menyesuaikan waktu penjemputan dengan kondisi aktual, termasuk keterlambatan penerbangan.</p>

<h2>Kenyamanan Selama Perjalanan</h2>
<p>Setelah penerbangan panjang, kenyamanan adalah prioritas. Armada kami dilengkapi dengan air conditioning optimal, kursi yang nyaman, dan ruang bagasi yang memadai agar perjalanan dari bandara menuju destinasi terasa menyenangkan.</p>

<h2>Pengemudi Berpengetahuan Lokal</h2>
<p>Driver kami bukan hanya mahir berkendara, tetapi juga memahami kondisi lalu lintas dan rute terbaik di kota. Ini memastikan Anda tiba di tujuan dengan waktu tempuh yang efisien.</p>

<h2>Keamanan Terjamin</h2>
<p>Setiap pengemudi kami telah melalui proses seleksi ketat dan pelatihan keselamatan berkendara. Data perjalanan juga tercatat untuk keamanan tambahan bagi klien kami.</p>

<p>Percayakan kebutuhan airport transfer perusahaan Anda kepada Grand Satya. Hubungi kami untuk informasi lebih lanjut dan penawaran khusus kontrak korporat.</p>',
                'photo'        => '/anyar/img/blog/blog-2.jpg',
                'published_at' => now()->subDays(20),
            ],
            [
                'title'        => 'Solusi Transportasi untuk Acara dan Event Perusahaan',
                'excerpt'      => 'Sukseskan acara perusahaan Anda dengan dukungan transportasi yang terencana dan profesional. Kami siap mengelola mobilitas peserta dari awal hingga akhir acara.',
                'content'      => '<p>Mengorganisir acara perusahaan berskala besar membutuhkan perencanaan logistik yang matang, termasuk aspek transportasi. Kemacetan, keterlambatan, atau ketidaknyamanan dalam mobilitas peserta dapat mengurangi kesan positif dari acara yang sudah dipersiapkan dengan susah payah.</p>

<h2>Layanan Shuttle Terpadu</h2>
<p>Kami menyediakan layanan shuttle terpadu untuk mengangkut peserta dari berbagai titik penjemputan menuju venue acara. Sistem ini mengurangi kepadatan parkir dan memastikan semua peserta tiba tepat waktu.</p>

<h2>Koordinasi dengan Event Organizer</h2>
<p>Tim kami berpengalaman berkoordinasi langsung dengan panitia acara atau event organizer untuk memahami kebutuhan transportasi secara detail, termasuk jadwal, jumlah peserta, dan titik-titik pickup.</p>

<h2>Armada Sesuai Kebutuhan</h2>
<p>Mulai dari sedan eksekutif untuk tamu VIP, MPV untuk kelompok kecil, hingga van kapasitas besar untuk rombongan—kami memiliki armada yang sesuai dengan setiap skala acara.</p>

<h2>Standby 24 Jam</h2>
<p>Untuk acara yang berlangsung hingga malam hari, armada dan pengemudi kami siap standby hingga seluruh peserta kembali dengan selamat ke hotel atau destinasi masing-masing.</p>

<p>Percayakan logistik transportasi event perusahaan Anda kepada Grand Satya. Konsultasikan kebutuhan Anda dan dapatkan penawaran terbaik dari tim kami.</p>',
                'photo'        => '/anyar/img/blog/blog-3.jpg',
                'published_at' => now()->subDays(10),
            ],
            [
                'title'        => 'Pentingnya Keselamatan dalam Layanan Transportasi Korporat',
                'excerpt'      => 'Keselamatan adalah nilai utama yang tidak bisa dikompromikan dalam setiap layanan transportasi. Pelajari bagaimana Grand Satya memastikan keamanan setiap perjalanan.',
                'content'      => '<p>Ketika berbicara tentang transportasi korporat, keselamatan bukan hanya sebuah fitur—melainkan fondasi dari seluruh layanan. Di Grand Satya, kami membangun budaya keselamatan dalam setiap aspek operasional kami.</p>

<h2>Seleksi dan Pelatihan Pengemudi</h2>
<p>Setiap pengemudi kami menjalani proses rekrutmen yang ketat meliputi verifikasi latar belakang, tes kesehatan, dan evaluasi kemampuan berkendara. Pelatihan berkala juga dilakukan untuk memastikan standar keselamatan selalu terjaga.</p>

<h2>Perawatan Armada Berkala</h2>
<p>Kendaraan yang terawat adalah kendaraan yang aman. Seluruh armada Grand Satya menjalani servis rutin sesuai jadwal pabrikan dan pemeriksaan menyeluruh sebelum digunakan untuk setiap perjalanan.</p>

<h2>Asuransi Komprehensif</h2>
<p>Seluruh armada dan penumpang dilindungi oleh asuransi komprehensif yang memberikan ketenangan pikiran bagi klien dan tamu perusahaan mereka.</p>

<h2>Sistem Monitoring Perjalanan</h2>
<p>Dengan teknologi GPS tracking, setiap perjalanan dapat dipantau secara real-time oleh tim operasional kami. Ini memungkinkan respons cepat jika terjadi situasi darurat di lapangan.</p>

<p>Bagi kami, membawa Anda ke tujuan dengan selamat adalah tanggung jawab yang kami emban dengan sepenuh hati di setiap perjalanan.</p>',
                'photo'        => '/anyar/img/blog/blog-4.jpg',
                'published_at' => now()->subDays(5),
            ],
            [
                'title'        => 'Layanan Antar Jemput Karyawan: Efisiensi dan Produktivitas',
                'excerpt'      => 'Program antar jemput karyawan yang terstruktur terbukti meningkatkan kehadiran, mengurangi stres perjalanan, dan mendongkrak produktivitas tim Anda.',
                'content'      => '<p>Bagi banyak perusahaan, program transportasi karyawan adalah salah satu benefit yang paling diapresiasi. Selain meningkatkan kesejahteraan karyawan, program ini juga membawa manfaat nyata bagi produktivitas perusahaan secara keseluruhan.</p>

<h2>Mengurangi Keterlambatan</h2>
<p>Dengan jadwal yang teratur dan rute yang terencana, program antar jemput mengurangi risiko keterlambatan karyawan akibat kemacetan atau masalah transportasi pribadi. Hasilnya, operasional perusahaan berjalan lebih lancar.</p>

<h2>Meningkatkan Keseimbangan Kerja dan Kehidupan</h2>
<p>Karyawan yang tidak perlu memikirkan urusan transportasi setiap hari memiliki lebih banyak energi untuk difokuskan pada pekerjaan mereka. Ini berkontribusi langsung pada tingkat kepuasan dan retensi karyawan.</p>

<h2>Hemat Biaya Operasional</h2>
<p>Dibandingkan memberikan tunjangan transportasi individual, program antar jemput korporat yang dikelola secara profesional seringkali lebih efisien secara biaya, terutama untuk perusahaan dengan karyawan dalam jumlah besar.</p>

<h2>Ramah Lingkungan</h2>
<p>Mengkonsolidasikan perjalanan karyawan dalam satu armada berarti mengurangi jumlah kendaraan pribadi di jalan. Ini adalah kontribusi nyata perusahaan Anda terhadap pengurangan emisi karbon.</p>

<p>Grand Satya menawarkan program antar jemput karyawan yang fleksibel dan dapat disesuaikan dengan lokasi kantor, jumlah karyawan, dan jadwal operasional perusahaan Anda.</p>',
                'photo'        => '/anyar/img/blog/blog-5.jpg',
                'published_at' => now()->subDay(),
            ],
        ];

        foreach ($posts as $post) {
            $post['slug'] = Str::slug($post['title']);
            BlogPost::create($post);
        }
    }
}
