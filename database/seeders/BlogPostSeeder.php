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
                'title'        => 'Tips Memilih Jasa Rental Kendaraan dan Alat Berat yang Tepat',
                'excerpt'      => 'Memilih mitra rental kendaraan dan alat berat yang tepat adalah kunci kelancaran proyek dan operasional bisnis Anda. Berikut beberapa hal penting yang perlu diperhatikan.',
                'content'      => 'Dalam industri konstruksi, pertambangan, dan operasional korporasi, ketersediaan kendaraan dan alat berat yang handal menjadi faktor penentu keberhasilan proyek. Memilih mitra rental yang tepat bukan sekadar soal harga, tetapi juga menyangkut keandalan unit, ketersediaan operator, dan kecepatan respons.

1. Pastikan Legalitas dan Perizinan

Hal pertama yang perlu dicek adalah legalitas perusahaan rental tersebut. Pastikan mereka memiliki izin usaha yang lengkap dan unit yang terdaftar resmi. Ini menjamin keamanan dan perlindungan hukum bagi perusahaan Anda.

2. Cek Kondisi dan Rekam Perawatan Unit

Unit yang prima mencerminkan komitmen perusahaan rental. Tanyakan tentang jadwal perawatan berkala, usia kendaraan/alat berat, dan kelengkapan spare part. Unit yang terawat meminimalkan risiko downtime di lapangan.

3. Ketersediaan Operator/Driver Bersertifikat

Untuk alat berat, pastikan operator yang disediakan memiliki Surat Izin Operator (SIO) yang masih berlaku. Operator bersertifikat menjamin keselamatan kerja dan efisiensi penggunaan alat di lokasi proyek.

4. Pertimbangkan Fleksibilitas Paket Sewa

Kebutuhan proyek sering berubah. Pilih mitra yang menawarkan paket fleksibel—harian, mingguan, bulanan—dan mampu menyesuaikan jumlah unit sesuai kebutuhan proyek Anda.

5. Transparansi Harga dan Kontrak

Hindari mitra yang tidak transparan dalam penentuan harga. Kontrak yang jelas memuat spesifikasi unit, durasi sewa, biaya mobilisasi, dan klausul unit pengganti jika terjadi kerusakan.

Grand Satya hadir sebagai solusi rental kendaraan dan alat berat terpercaya dengan unit terawat, operator bersertifikat, dan layanan yang dapat disesuaikan dengan kebutuhan proyek Anda.',
                'photo'        => '/anyar/img/blog/blog-1.jpg',
                'published_at' => now()->subDays(30),
            ],
            [
                'title'        => 'Jenis-Jenis Alat Berat dan Fungsinya dalam Proyek Konstruksi',
                'excerpt'      => 'Mengenal jenis alat berat dan fungsinya membantu Anda memilih unit yang tepat untuk setiap tahap proyek konstruksi, pertambangan, atau infrastruktur.',
                'content'      => 'Proyek konstruksi dan pertambangan membutuhkan berbagai jenis alat berat yang berbeda sesuai kebutuhan pekerjaan di lapangan. Memahami fungsi masing-masing alat membantu perencanaan yang lebih efisien dan penggunaan anggaran yang optimal.

Excavator
Excavator atau backhoe adalah alat berat paling serbaguna dalam dunia konstruksi. Digunakan untuk penggalian tanah, pengerukan, pemindahan material, pembongkaran, dan land clearing. Tersedia dalam berbagai ukuran dari mini excavator hingga excavator besar untuk pekerjaan tambang.

Bulldozer
Bulldozer berfungsi untuk meratakan lahan, mendorong material, dan pembersihan area. Dilengkapi blade di bagian depan yang dapat disesuaikan ketinggiannya. Cocok untuk pekerjaan land clearing skala besar dan perataan tanah dasar sebelum konstruksi.

Motor Grader
Motor grader digunakan untuk membuat permukaan tanah yang rata dan presisi. Sangat penting dalam pengerjaan dan perawatan jalan proyek, pembentukan saluran drainase, serta perataan akhir sebelum pemadatan.

Vibro Compactor
Alat pemadatan tanah dan aspal yang menggunakan getaran untuk mencapai kepadatan optimal. Digunakan dalam pengerjaan jalan, landasan pacu bandara, area parkir, dan fondasi bangunan.

Crane
Mobile crane digunakan untuk pengangkatan dan pemindahan material berat. Tersedia dalam berbagai kapasitas, dari 10 ton hingga ratusan ton, sesuai kebutuhan pengangkatan di proyek gedung, jembatan, dan instalasi peralatan industri.

Dump Truck
Kendaraan pengangkut material galian, pasir, batu, dan material konstruksi lainnya. Kapasitas bervariasi dari 10 ton untuk proyek kecil hingga 100 ton untuk tambang skala besar.

Grand Satya menyediakan berbagai jenis alat berat di atas dengan kondisi prima dan operator bersertifikat untuk mendukung proyek Anda.',
                'photo'        => '/anyar/img/blog/blog-2.jpg',
                'published_at' => now()->subDays(20),
            ],
            [
                'title'        => 'Keuntungan Sewa Alat Berat vs Beli: Mana yang Lebih Menguntungkan?',
                'excerpt'      => 'Pertimbangan antara menyewa atau membeli alat berat adalah keputusan bisnis penting. Simak analisis lengkapnya agar investasi perusahaan Anda lebih optimal.',
                'content'      => 'Salah satu pertanyaan yang paling sering dihadapi oleh pengusaha konstruksi dan pertambangan adalah: lebih baik sewa atau beli alat berat? Jawabannya bergantung pada beberapa faktor krusial.

Keuntungan Sewa Alat Berat

Modal Awal Lebih Kecil
Harga alat berat baru berkisar dari ratusan juta hingga miliaran rupiah. Dengan menyewa, Anda hanya membayar biaya pemakaian tanpa harus mengikat modal besar di aset tetap.

Tidak Ada Biaya Perawatan
Biaya servis, spare part, dan perawatan alat berat ditanggung oleh perusahaan rental. Ini menghilangkan beban operasional yang tidak terduga bagi kontraktor.

Fleksibilitas Unit
Setiap proyek memiliki kebutuhan alat yang berbeda. Dengan menyewa, Anda dapat memilih jenis dan kapasitas alat yang sesuai untuk setiap proyek tanpa terikat pada satu unit.

Tidak Ada Risiko Depresiasi
Nilai alat berat menyusut secara signifikan seiring waktu. Dengan menyewa, Anda tidak menanggung risiko kerugian akibat penurunan nilai aset.

Kapan Lebih Baik Membeli?

Membeli alat berat lebih masuk akal jika:
- Alat tersebut akan digunakan secara intensif sepanjang tahun
- Proyek berlangsung lebih dari 3-5 tahun berturut-turut
- Perusahaan memiliki tim teknisi internal untuk perawatan
- Jenis proyek yang dikerjakan sangat spesifik dan berulang

Kesimpulan

Untuk perusahaan dengan proyek yang bervariasi atau tidak terlalu intensif, sewa alat berat adalah pilihan yang jauh lebih efisien secara finansial. Grand Satya menyediakan paket sewa fleksibel dengan harga kompetitif untuk mendukung pertumbuhan bisnis Anda.',
                'photo'        => '/anyar/img/blog/blog-3.jpg',
                'published_at' => now()->subDays(12),
            ],
            [
                'title'        => 'Pentingnya Keselamatan Kerja dalam Operasional Alat Berat',
                'excerpt'      => 'Keselamatan adalah prioritas utama dalam setiap pekerjaan menggunakan alat berat. Pelajari standar keselamatan yang wajib diterapkan di lokasi proyek.',
                'content'      => 'Pengoperasian alat berat membawa risiko kecelakaan yang serius jika tidak dikelola dengan standar keselamatan yang benar. Di Grand Satya, kami berkomitmen untuk memastikan setiap unit yang disewa dioperasikan dengan mengutamakan keselamatan.

Sertifikasi Operator (SIO)
Setiap operator alat berat wajib memiliki Surat Izin Operator (SIO) yang diterbitkan oleh Kemnaker RI. SIO membuktikan bahwa operator telah memenuhi standar kompetensi dan keselamatan yang ditetapkan. Grand Satya hanya menyediakan operator bersertifikat aktif.

Inspeksi Pra-Operasi
Sebelum alat berat dioperasikan setiap hari, operator wajib melakukan pemeriksaan menyeluruh (daily checklist) meliputi sistem hidraulis, rem, lampu, klakson, dan kondisi umum alat. Ini adalah garis pertahanan pertama untuk mencegah kecelakaan akibat kerusakan mekanis.

APD yang Tepat
Operator dan pekerja di sekitar alat berat wajib menggunakan Alat Pelindung Diri (APD) yang sesuai: helm proyek, rompi reflektif, sepatu safety, dan pelindung telinga. Kepatuhan APD harus ditegakkan tanpa pengecualian.

Zona Aman di Area Operasi
Setiap alat berat membutuhkan radius aman yang harus bebas dari personel yang tidak berkepentingan. Penggunaan barrier, rambu peringatan, dan petugas safety sangat dianjurkan.

Komunikasi Efektif
Koordinasi yang jelas antara operator, rigger, dan pekerja lapangan sangat krusial terutama saat pengangkatan dengan crane atau pekerjaan di area sempit.

Grand Satya memastikan setiap unit yang kami kirim telah melalui inspeksi menyeluruh dan operator kami memahami prosedur keselamatan kerja sesuai standar internasional.',
                'photo'        => '/anyar/img/blog/blog-4.jpg',
                'published_at' => now()->subDays(5),
            ],
            [
                'title'        => 'Solusi Rental Kendaraan untuk Operasional Tambang dan Migas',
                'excerpt'      => 'Operasional di sektor tambang dan migas membutuhkan kendaraan dan alat berat khusus yang andal. Simak bagaimana Grand Satya mendukung industri ini.',
                'content'      => 'Sektor pertambangan dan minyak bumi & gas (migas) adalah dua industri yang sangat bergantung pada ketersediaan kendaraan dan alat berat yang handal. Downtime unit di lapangan bisa berarti kerugian besar bagi operasional proyek.

Kebutuhan Kendaraan di Sektor Tambang

Operasional tambang membutuhkan beragam kendaraan: dari light vehicle seperti double cabin untuk inspeksi dan mobilitas personel, hingga heavy truck untuk pengangkutan material galian. Alat berat seperti excavator, bulldozer, dan dump truck adalah tulang punggung produktivitas tambang.

Tantangan Khusus Medan Tambang

Medan di area tambang seringkali ekstrem: jalan berdebu, tanjakan curam, dan beban kerja tinggi sepanjang waktu. Unit yang disewa harus memiliki spesifikasi yang sesuai dan telah terbukti handal di kondisi serupa.

Solusi Grand Satya untuk Tambang & Migas

Grand Satya menyediakan:
- Double cabin 4WD untuk mobilitas personel dan inspeksi lapangan
- Dump truck berbagai kapasitas untuk pengangkutan material
- Excavator dan bulldozer untuk pekerjaan galian dan perataan
- Bus karyawan untuk transportasi shift tambang
- Kontrak jangka panjang dengan harga kompetitif

Dukungan 24 Jam

Kami memahami bahwa operasional tambang dan migas berlangsung 24 jam. Tim support Grand Satya siap dihubungi kapan pun untuk memastikan tidak ada downtime yang menghambat produktivitas proyek Anda.

Hubungi Grand Satya untuk mendapatkan paket rental kendaraan dan alat berat yang disesuaikan dengan kebutuhan spesifik proyek tambang dan migas Anda.',
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
