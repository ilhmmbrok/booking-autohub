# Booking System

Aplikasi sistem booking berbasis **PHP** dengan styling menggunakan **Tailwind CSS v4**.

## Prerequisites

Pastikan tools berikut sudah terinstall di komputer kamu:

| Tool | Link Download |
|------|---------------|
| **Laragon** atau **XAMPP** | [laragon.org](https://laragon.org/) / [apachefriends.org](https://www.apachefriends.org/) |
| **Node.js** (18+) | [nodejs.org](https://nodejs.org/) |

> **Note:** Laragon dan XAMPP sudah menyediakan **PHP**, **Apache**, dan **MySQL** secara otomatis, jadi kamu tidak perlu install satu per satu.

## Cara Menjalankan di Development

### 1. Clone Repository ke Folder Server

Letakkan folder project di dalam direktori root server sesuai aplikasi yang kamu gunakan:

| Server | Lokasi Folder |
|--------|---------------|
| **Laragon** | `C:\laragon\www\` |
| **XAMPP** | `C:\xampp\htdocs\` |

**Jika menggunakan Laragon:**

```bash
cd C:\laragon\www
git clone <repository-url> booking
cd booking
```

**Jika menggunakan XAMPP:**

```bash
cd C:\xampp\htdocs
git clone <repository-url> booking
cd booking
```

> **Penting:** Pastikan folder project berada di dalam direktori root server agar bisa diakses melalui browser via `localhost`.

### 2. Install Dependencies

```bash
npm install
```

Perintah ini akan menginstall **Tailwind CSS v4** dan **@tailwindcss/cli**.

### 3. Jalankan Tailwind CSS (Watch Mode)

Buka **terminal**, lalu jalankan:

```bash
npm run dev
```

Perintah ini akan meng-compile `src/css/input.css` → `src/css/output.css` dan otomatis melakukan re-compile setiap kali ada perubahan file.

> **Jangan tutup terminal ini** selama development berlangsung.

### 4. Jalankan Server (Laragon / XAMPP)

**Jika menggunakan Laragon:**

1. Buka aplikasi **Laragon**
2. Klik tombol **"Start All"** untuk menjalankan Apache & MySQL
3. Pastikan status Apache menunjukkan **Running**

**Jika menggunakan XAMPP:**

1. Buka **XAMPP Control Panel**
2. Klik **"Start"** pada modul **Apache** dan **MySQL**
3. Pastikan status keduanya menunjukkan **Running** (berwarna hijau)

### 5. Buka di Browser

Akses halaman berikut di browser:

- **Login:** [http://localhost/booking/src/pages/login.php](http://localhost/booking/src/pages/login.php)
- **Register:** [http://localhost/booking/src/pages/register.php](http://localhost/booking/src/pages/register.php)

## Struktur Folder

```
booking/
├── index.php              # Entry point utama
├── package.json           # Konfigurasi npm & scripts
├── src/
│   ├── assets/
│   │   └── background.webp    # Gambar background
│   ├── css/
│   │   ├── input.css          # File input Tailwind CSS
│   │   └── output.css         # File output (auto-generated)
│   └── pages/
│       ├── login.php          # Halaman login
│       └── register.php       # Halaman register
└── node_modules/              # Dependencies (auto-generated)
```

## Scripts yang Tersedia

| Script | Perintah | Deskripsi |
|--------|----------|-----------|
| `dev` | `npm run dev` | Menjalankan Tailwind CSS dalam watch mode |

## Catatan Penting

- File `src/css/output.css` di-generate secara otomatis oleh Tailwind CSS. **Jangan edit file ini secara manual.**
- Semua perubahan styling dilakukan di `src/css/input.css` atau langsung menggunakan utility class Tailwind di file HTML/PHP.
- Pastikan `npm run dev` selalu berjalan di background agar perubahan CSS ter-compile secara otomatis.
