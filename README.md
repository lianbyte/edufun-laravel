# EduFun - Laravel Web Application

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=flat&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1-blue?style=flat&logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple?style=flat&logo=bootstrap)
![License](https://img.shields.io/badge/License-MIT-green)

EduFun adalah website aplikasi pendidikan yang menyediakan informasi tentang bidang pelajaran IT, khususnya **Data Science** dan **Network Security**.

## 📋 Deskripsi Project

Project ini dikembangkan sebagai bagian dari Quiz Web Programming menggunakan Laravel Framework dan Bootstrap. Website ini menampilkan artikel-artikel edukatif tentang teknologi informasi dengan fitur-fitur modern.

## ✨ Fitur Utama

- 🏠 **Home Page** - Menampilkan 2 artikel terbaru dengan hero image
- 📚 **Category Page** - Kategori Data Science dan Network Security
- 📄 **Article Detail** - Halaman detail artikel dengan views counter
- ✍️ **Writers Page** - Profil penulis dengan spesialisasi
- ℹ️ **About Us** - Informasi tentang EduFun
- 🔥 **Popular Page** - Artikel populer dengan pagination (3 artikel/halaman)

## 🛠️ Teknologi

- **Framework:** Laravel 10.x
- **Frontend:** Bootstrap 5.3
- **Database:** SQLite
- **PHP Version:** 8.1+
- **Server:** PHP Built-in Server

## 📊 Struktur Database

### Categories
- Data Science
- Network Security

### Writers
- Raka Putra Wicaksono (Spesialis Interactive Multimedia)
- Bia Mecca Annisa (Spesialis Data Science)
- Abi Firmansyah (Spesialis Network Security)

### Articles
- 3 artikel Data Science (Machine Learning, Deep Learning, NLP)
- 3 artikel Network Security (Network Security, Software Security, Network Technology)

## 🚀 Instalasi

### Prerequisites
- PHP 8.1 atau lebih tinggi
- Composer
- SQLite extension

### Langkah Instalasi

1. Clone repository
```bash
git clone https://github.com/lianbyte/edufun-laravel.git
cd edufun-laravel
```

2. Install dependencies
```bash
composer install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Create database
```bash
touch database/database.sqlite
```

5. Run migrations dan seeders
```bash
php artisan migrate --seed
```

6. Run development server
```bash
php artisan serve
```

7. Akses website di browser
```
http://localhost:8000
```

## 📁 Struktur Project

```
edufun-laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── HomeController.php
│   │       ├── CategoryController.php
│   │       ├── ArticleController.php
│   │       └── WriterController.php
│   └── Models/
│       ├── Category.php
│       ├── Writer.php
│       └── Article.php
├── database/
│   ├── migrations/
│   └── seeders/
│       ├── CategorySeeder.php
│       ├── WriterSeeder.php
│       └── ArticleSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── category.blade.php
│       ├── article.blade.php
│       ├── writers.blade.php
│       ├── writer.blade.php
│       ├── about.blade.php
│       └── popular.blade.php
└── routes/
    └── web.php
```

## 🎯 Komponen Laravel

### Routes
- Home, About, Popular
- Category (Data Science, Network Security)
- Article Detail
- Writers & Writer Detail

### Controllers
- **HomeController** - Mengelola home, about, dan popular page
- **CategoryController** - Menampilkan artikel per kategori
- **ArticleController** - Detail artikel dengan views counter
- **WriterController** - Profil writer dan artikel mereka

### Models & Relationships
- **Category** → hasMany Articles
- **Writer** → hasMany Articles
- **Article** → belongsTo Category, belongsTo Writer

### Migrations
- Categories table
- Writers table
- Articles table (dengan foreign keys)

### Seeders
- CategorySeeder (Data Science, Network Security)
- WriterSeeder (3 writers dengan spesialisasi)
- ArticleSeeder (6 artikel dengan Faker untuk views)

## 📸 Screenshots

### Home Page
Menampilkan hero image dan 2 artikel terbaru dengan layout card yang menarik.

### Category Page
List artikel berdasarkan kategori dengan informasi lengkap (judul, tanggal, penulis, excerpt).

### Article Detail
Halaman detail dengan konten lengkap artikel dan views counter otomatis.

### Writers Page
Profil 3 writers dengan avatar, nama, spesialisasi, dan link ke artikel mereka.

### Popular Page
Artikel populer dengan pagination (3 artikel per halaman, total 6 artikel).

## 🎓 Informasi Akademik

**Mata Kuliah:** Web Programming  
**Project:** Quiz Web Programming - Before UTS  
**Framework:** Laravel  
**NIM:** 2350109903 (Ganjil - Data Science & Network Security)

## 📝 Catatan

- Website fokus pada User Interface (bukan Admin)
- Menggunakan Bootstrap untuk responsive design
- Implementasi lengkap MVC pattern
- Database relationships dengan foreign keys
- Seeder menggunakan Faker untuk data realistis
- Pagination untuk Popular page (Challenge Feature)

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Author

**lianbyte**  
GitHub: [@lianbyte](https://github.com/lianbyte)

---

⭐ **Star this repository if you find it helpful!**
