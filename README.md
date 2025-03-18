# E-Commerce Microservices

Proyek ini merupakan demonstrasi migrasi aplikasi e-commerce monolitik ke **arsitektur microservices** menggunakan **Laravel**. Microservices ini dirancang untuk meningkatkan **scalability**, **modularity**, dan **maintainability**. Aplikasi ini mencakup beberapa layanan seperti **User Service**, **Product Service**, **Order Service**, dan **API Gateway** untuk mengelola komunikasi antar layanan.

## **Gambaran Arsitektur**

- **User Service**: Menangani autentikasi pengguna, registrasi, dan login.
- **Product Service**: Mengelola produk, termasuk menampilkan, menambah, dan mengambil detail produk.
- **Order Service**: Mengelola pemrosesan pesanan, checkout, dan pencatatan transaksi.
- **API Gateway**: Bertindak sebagai pintu masuk untuk semua layanan dan mengarahkan permintaan ke layanan yang sesuai.

## **Fitur Utama**

- **Manajemen Pengguna**: Registrasi dan login pengguna.
- **Manajemen Produk**: Menampilkan daftar produk dan melihat detail produk.
- **Manajemen Pesanan**: Membuat pesanan dan melihat pesanan pengguna.
- **API Gateway**: Titik masuk tunggal untuk semua layanan dengan API berbasis REST.

## **Teknologi yang Digunakan**

- **Backend**: 
  - Laravel (Framework PHP)
  - MySQL (Database)
- **Frontend**: 
  - Laravel Blade (untuk templating)
  - Bootstrap 5 (untuk desain UI)
- **Komunikasi**: 
  - Permintaan HTTP antar layanan melalui API Gateway.
  
## **Cara Memulai**

### **Prasyarat**

Sebelum menjalankan proyek ini, pastikan Anda telah menginstal perangkat berikut:

- [PHP 7.4+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [MySQL](https://dev.mysql.com/downloads/installer/)
- [Laravel](https://laravel.com/docs/8.x/installation)
- [Postman](https://www.postman.com/) (Opsional, untuk pengujian API)


## Jalankan Setiap Layanan pada Port yang Berbeda:

Untuk User Service:

php artisan serve --port=8001

Untuk Product Service:

php artisan serve --port=8002

Untuk Order Service:

php artisan serve --port=8003

Untuk API Gateway:

php artisan serve --port=8000

## Uji API:

    Gunakan Postman atau alat pengujian API lainnya untuk menguji endpoint API yang diekspos oleh API Gateway:
        Layanan pengguna: http://localhost:8000/user/register, http://localhost:8000/user/login
        Layanan produk: http://localhost:8000/product/products
        Layanan pesanan: http://localhost:8000/order/orders

## Frontend:

    Tampilan Laravel Blade untuk menampilkan produk dan detail pesanan dapat diakses langsung dari API Gateway:
        Daftar Produk: http://localhost:8000/products

