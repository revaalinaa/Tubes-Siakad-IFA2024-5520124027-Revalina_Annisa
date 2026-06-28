Link Hosting : https://reva.ifalgorithm24.web.id/login
# 🎓 SIAKAD - Sistem Informasi Akademik

SIAKAD (Sistem Informasi Akademik) merupakan aplikasi berbasis web yang dibangun menggunakan **Laravel 12** sebagai proyek mata kuliah **Pemrograman Web Lanjut (PWL II)**. Aplikasi ini digunakan untuk mengelola data akademik seperti dosen, mahasiswa, mata kuliah, jadwal perkuliahan, serta pengisian Kartu Rencana Studi (KRS).

---

## 👩‍🎓 Identitas Mahasiswa

**Nama** : Revalina Annisa
**NPM** : 5520124027
**Kelas** : IFA 2024
**Mata Kuliah** : Pemrograman Web Lanjut (PWL II)

---

# ✨ Fitur Aplikasi

### 🔐 Autentikasi

* Login
* Logout
* Role Admin
* Middleware Role

### 👨‍🏫 Manajemen Dosen

* Menampilkan data dosen
* Menambah data dosen
* Mengubah data dosen
* Menghapus data dosen

### 👨‍🎓 Manajemen Mahasiswa

* Menampilkan data mahasiswa
* Menambah data mahasiswa
* Mengubah data mahasiswa
* Menghapus data mahasiswa
* Pencarian mahasiswa

### 📚 Manajemen Mata Kuliah

* Menampilkan data mata kuliah
* Menambah mata kuliah
* Mengubah mata kuliah
* Menghapus mata kuliah

### 🗓️ Manajemen Jadwal

* Menampilkan jadwal kuliah
* Menambah jadwal
* Menghapus jadwal

### 📝 KRS

* Mengambil mata kuliah
* Menampilkan daftar KRS
* Menghapus mata kuliah dari KRS
* Export KRS ke PDF

### 📊 Dashboard

* Dashboard Admin
* Statistik data akademik

---

# 🛠️ Teknologi

* Laravel 12
* PHP 8.2
* MySQL
* Blade Template
* Bootstrap / CSS
* Font Awesome
* DomPDF
* Composer
* Vite
* Git & GitHub

---

# 📂 Struktur Project

```
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

# ⚙️ Cara Menjalankan Project

## Clone Repository

```bash
git clone https://github.com/revaalinaa/TUBES-SIAKAD-IFA2024-5520124027-RevalinaAnnisa.git
```

Masuk ke folder project

```bash
cd siakad
```

Install dependency

```bash
composer install
```

Install Node Modules

```bash
npm install
```

Copy file environment

```bash
cp .env.example .env
```

Generate Application Key

```bash
php artisan key:generate
```

Atur konfigurasi database pada file **.env**

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siakad
DB_USERNAME=root
DB_PASSWORD=
```

Migrasi Database

```bash
php artisan migrate
```

Menjalankan Server Laravel

```bash
php artisan serve
```

Menjalankan Vite

```bash
npm run dev
```

---

# 📷 Tampilan Aplikasi

Folder **screenshots/** berisi dokumentasi tampilan aplikasi, antara lain:

* Login
* Dashboard
* Data Dosen
* Data Mahasiswa
* Data Mata Kuliah
* Data Jadwal
* KRS
* Export PDF

---

# 👩‍💻 Pengembang

**Revalina Annisa**
NPM : 5520124027
Program Studi Teknik Informatika
Universitas Gunadarma

---

# 📄 Lisensi

Project ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web Lanjut (PWL II)** dan digunakan hanya untuk keperluan akademik.
