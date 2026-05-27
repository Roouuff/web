# Web Profil Kampus - Laravel

Project ini adalah aplikasi web profil kampus berbasis **Laravel** yang menampilkan beberapa halaman fakultas serta halaman admin sederhana.

## ✨ Fitur

- Halaman Beranda
- Halaman Fakultas:
    - FTI
    - FAI
    - FE
    - FIP
    - FT
- Sistem Login & Register Laravel Auth
- Dashboard Admin
- Struktur MVC Laravel
- Menggunakan Vite untuk asset management

---

## 🛠️ Teknologi yang Digunakan

- PHP
- Laravel
- MySQL / SQLite
- Bootstrap / CSS
- Vite
- Node.js

---

## 📁 Struktur Folder

```bash
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

---

## 🚀 Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/username/nama-repository.git
```

### 2. Masuk ke Folder Project

```bash
cd nama-repository
```

### 3. Install Dependency PHP

```bash
composer install
```

### 4. Install Dependency Node.js

```bash
npm install
```

### 5. Copy File Environment

```bash
cp .env.example .env
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Jalankan Migration

```bash
php artisan migrate
```

### 8. Jalankan Vite

```bash
npm run dev
```

### 9. Jalankan Server Laravel

```bash
php artisan serve
```

Akses aplikasi melalui:

```bash
http://127.0.0.1:8000
```

---

## 📌 Routing Utama

| Route              | Keterangan                   |
| ------------------ | ---------------------------- |
| `/`                | Halaman Beranda              |
| `/beranda`         | Halaman Beranda              |
| `/fti`             | Fakultas Teknologi Informasi |
| `/fai`             | Fakultas Agama Islam         |
| `/fe`              | Fakultas Ekonomi             |
| `/fip`             | Fakultas Ilmu Pendidikan     |
| `/ft`              | Fakultas Teknik              |
| `/admin/dashboard` | Dashboard Admin              |


---

## 👨‍💻 Developer

Dibuat menggunakan Laravel Framework.

---

## 📄 Lisensi

Project ini bebas digunakan untuk pembelajaran dan pengembangan.
