# 🏫 SIMPA (Sistem Informasi dan Monitoring Perkembangan Anak)

SIMPA adalah sebuah platform *web* komprehensif yang dibangun menggunakan **Laravel** untuk menjembatani pihak sekolah (admin dan guru) dengan siswa/orang tua. 

Sistem ini dirancang tidak hanya untuk mengelola administrasi akademik dasar, tetapi juga difokuskan pada pemantauan kesehatan fisik dan interaksi konsultasi secara terpadu.

## 🌟 Fitur Unggulan

* **🔐 Multi-Role Access Control:** 
  Sistem memiliki tiga hak akses mandiri: **Admin** (kendali penuh), **Guru** (mengelola nilai & jadwal), dan **Siswa/Orang Tua** (memantau perkembangan).
* **📊 Visualisasi Data Kesehatan:** 
  Mengintegrasikan `Chart.js` untuk menampilkan grafik garis dan batang secara *real-time* terkait pemantauan IMT (Index Massa Tubuh), berat badan, dan tinggi badan siswa.
* **⚡ Live Search (AJAX):** 
  Pencarian data siswa diimplementasikan menggunakan *Asynchronous JavaScript and XML* (AJAX) via `Fetch API` untuk hasil pencarian instan tanpa *reload* halaman.
* **💬 Sistem Konsultasi:** 
  Modul interaktif yang memungkinkan siswa/orang tua mengirimkan pesan konsultasi langsung kepada guru dengan pelacakan status (*Proses* / *Selesai*).
* **📥 Ekspor Laporan:** 
  Dilengkapi fitur untuk mengekspor data (Siswa, Guru, dll) ke dalam format *spreadsheet* secara otomatis.

## 🗂️ Modul Sistem
1. **Manajemen Pengguna:** Pengelolaan kredensial (Admin, Guru, Siswa).
2. **Manajemen Akademik:** Pengelolaan Data Pelajaran, Jadwal Kelas, dan Nilai Siswa.
3. **Manajemen Kesehatan:** Pencatatan dan monitoring metrik kesehatan fisik siswa.
4. **Sistem File:** Dukungan fitur *upload* dokumen.

## 🛠️ Stack Teknologi
* **Backend:** Laravel (PHP)
* **Frontend:** Blade Templating, HTML5, CSS3, Bootstrap 5, Tailwind CSS
* **Visualisasi & Interaktivitas:** Chart.js, Vanilla JavaScript (Fetch API)
* **Database:** MySQL

## 🚀 Cara Instalasi (Local Development)
1. Clone repositori: `git clone [LINK_GITHUB_KAMU]`
2. Masuk ke direktori: `cd [NAMA_FOLDER_PROYEK]`
3. Instal dependensi PHP: `composer install`
4. Setup environment: `cp .env.example .env` lalu `php artisan key:generate`
5. Konfigurasi kredensial *database* pada file `.env`.
6. Jalankan migrasi dan seeder: `php artisan migrate --seed`
7. Jalankan server lokal: `php artisan serve`
