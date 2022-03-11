# POS-Kafe (Web App)

Repositori ini merupakan projek sistem informasi berbasis web yang berisi fitur aplikasi keuangan, kasir, kepegawaian, inventaris, dan laporan.
Dibangun untuk diterapkan ke dalam unit bisnis Rumah Kopi Sabit sebagai syarat kelulusan pada mata kuliah KKP (Kuliah Kerja Praktek).

## Yang dibutuhkan

-   Composer 2.x
-   Laravel 8.x
-   PHP 7.4 atau lebih

## Cara instalasi (local)

-   Pertama, buka <b>gitbash</b> di folder/direktori tempat menyimpan projek (contoh: htdocs)
-   Lalu clone repo ini dengan cara ketik:

```bash
git clone https://github.com/wikitora99/kkp-poskafe.git
```

-   Jika proses clone selesai, selanjutnya pindah ke folder/direktori projek-nya dengan cara ketik:

```bash
cd kkp-poskafe
```

-   Lalu instal package/library laravel yang dibutuhkan, ketik:

```bash
composer install
```

-   Jika proses instalasi selesai, selanjutnya salin file `.env.example` yang ada di dalam projek, ketik:

```bash
cp .env.example .env
```

-   Lalu buka file `.env` tersebut dan ubah konfigurasi untuk database & url aplikasi (sesuaikan)

-   Selanjutnya buka kembali <b>gitbash</b> dan lakukan migrasi database dengan cara ketik:

```bash
php artisan migrate --seed
```

-   Terakhir, nyalakan local developement server laravel dengan cara ketik:

```bash
php artisan serve
```

