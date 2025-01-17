# Itinerary

Projek website e-commerce yang menjual oleh-oleh dari berbagai daerah.

## Daftar Isi
- [Tentang](#tentang)
- [Fitur](#fitur)
- [Persyaratan](#persyaratan)
- [Instalasi](#instalasi)
- [Konfigurasi](#konfigurasi)
- [Penggunaan](#penggunaan)
- [Lisensi](#lisensi)

## Tentang

Projek ini dibuat pada tahun 2022 untuk mempelajari Laravel 7 yang saya pelajari dari berbagai sumber di internet terutama tutorial dari channel YouTube [Wahidev Academy](https://www.youtube.com/@WahidevAcademy)

## Fitur

- Keranjang e-commerce
- Checkout
- History
- Notifikasi
- List produk berdasarkan oleh-oleh daerah

## Persyaratan

Sebelum menginstal proyek ini, pastikan Anda memiliki:
- PHP >= 7.2
- Composer
- Database (MySQL, PostgreSQL, dll.)
- Laravel 7.x

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal proyek ini:

1. **Clone repo ini:**
   ```bash
   git clone https://github.com/revaldyazura/itinerary
   ```
2. **Masuk ke direktori proyek**
   ```bash
   cd itinerary
   ```
3. **Salin file .env.example ke .env:**
   ```bash
   cp .env.example .env
   ```
4. **Generate key aplikasi:**
   ```bash
   php artisan key:generate
   ```
5. **Sesuaikan pengaturan database di file .env:**
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=username
    DB_PASSWORD=password
   ```
6. **Migrasi database:**
   ```bash
   php artisan migrate
   ```

## Penggunaan

1. **Jalankan Server Lokal**
   ```bash
   php artisan serve
   ```
2. **Buka browser dan kunjungi [http://localhost:8000](http://localhost:8000)**

## Lisensi

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
