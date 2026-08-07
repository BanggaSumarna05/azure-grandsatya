# Test Upload Gambar

## Langkah Testing:

### 1. Coba upload gambar baru di Blog Post
- Buka Filament admin: `http://127.0.0.1:8000/admin/blog-posts`
- Klik "New" / "Buat Baru"
- Isi form dan upload gambar
- Simpan

### 2. Cek log Laravel:
```
Get-Content storage\logs\laravel.log -Tail 50
```

### 3. Cek database apakah photo tersimpan:
```
php artisan tinker --execute="echo App\Models\BlogPost::latest()->first()->photo;"
```

### 4. Cek apakah file fisik ada di storage:
```
Get-ChildItem storage\app\public\blog
```

## Diagnosa saat ini:

✅ **Fleet**: Upload berfungsi dengan baik (path `fleets/xxx.jpeg`)
❓ **BlogPost & GalleryPhoto**: Belum jelas apakah pernah dicoba upload baru

### Kemungkinan penyebab:
1. Data lama menggunakan path absolut `/anyar/img/...` dari seeder
2. Setelah upload baru seharusnya path berubah menjadi `blog/xxx.jpeg`
3. Jika upload baru tetap tidak tersimpan, kemungkinan ada masalah dengan Filament FileUpload configuration

### Solusi yang sudah diterapkan:
- ✅ Folder `storage/app/public/blog` dan `gallery` sudah dibuat
- ✅ Symlink `public/storage` sudah ada
- ✅ Method `placeholder()` sudah diganti dengan `default()`
- ✅ Ditambahkan logging untuk tracking upload
- ✅ Ditambahkan `mutateFormDataBeforeCreate` dan `mutateFormDataBeforeSave`
