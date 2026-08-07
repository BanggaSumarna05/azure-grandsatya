# 🚀 Panduan Deployment Grand Satya Rent Car

Dokumen ini berisi panduan praktis dan urutan perintah untuk mendeploy aplikasi ini ke hosting/server Anda (cPanel, Shared Hosting, atau VPS Ubuntu/Linux).

---

## 📋 Ringkasan Akun Admin Default
Setelah menjalankan seeder di hosting, gunakan akun admin berikut untuk masuk ke panel administrasi:

- **URL Admin Panel**: `https://domain-anda.com/admin`
- **Email**: `admin@grandsatya.com`
- **Password**: `admin123` *(Segera ubah password setelah login)*

---

## 🛠️ Langkah-Langkah Deployment

### 1. Persiapan File & Upload
1. Push/upload semua file proyek ke repository Git Anda atau upload file zip proyek ke server (kecuali folder `vendor`, `node_modules`, dan file `.env`).

### 2. Konfigurasi Environment (`.env`)
1. Di server/hosting Anda, duplikat file `.env.example` menjadi `.env`.
2. Buka `.env` di server dan sesuaikan variabel berikut:
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://domain-anda.com

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database_hosting
   DB_USERNAME=username_db_hosting
   DB_PASSWORD=password_db_hosting
   ```

---

### 3. Perintah Terminal Deployment (Jalankan di Server)

Buka SSH / Terminal di server hosting Anda, lalu jalankan perintah berikut secara berurutan:

#### A. Install Dependensi PHP
```bash
composer install --optimize-autoloader --no-dev
```

#### B. Generate Application Key
```bash
php artisan key:generate
```

#### C. Migrasi Database & Seeder Data
Perintah ini akan membuat tabel, mengisi data mobil, galeri, blog, dan akun admin default:
```bash
php artisan migrate:fresh --seed --force
```

#### D. Create Storage Link
Perintah ini wajib agar gambar mobil, blog, dan aset galeri dapat diakses publik:
```bash
php artisan storage:link
```

#### E. Cache Konfigurasi & Route (Optimasi Performa Production)
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 📂 Pengaturan Tambahan untuk cPanel / Shared Hosting

Jika Anda menggunakan **cPanel Shared Hosting**:
1. Arahkan **Document Root** domain/subdomain Anda ke folder `public/` proyek (contoh: `public_html/public` atau ubah nama `public` sesuai aturan hosting Anda).
2. Pastikan versi PHP server diset ke **PHP 8.2** atau **PHP 8.3**.
3. Pastikan ekstensi PHP berikut aktif: `pdo_mysql`, `mbstring`, `openssl`, `fileinfo`, `gd`, `zip`, `xml`, `ctype`, `json`.

---

## ⚡ Checklist Akhir Sebelum Go-Live
- [x] Test suite passing (`php artisan test`)
- [x] Admin User Seeder include di `DatabaseSeeder.php`
- [x] File `.gitignore` terkonfigurasi dengan aman
- [x] File `.env.example` siap untuk produksi
- [ ] Ubah `APP_DEBUG=false` di server production
- [ ] Jalankan `php artisan storage:link` di server production
- [ ] Ubah password admin default setelah login pertama kali
