<?php

namespace Database\Seeders;

use App\Models\guru;
use App\Models\konsultasi;
use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // Mengambil semua siswa dan guru yang telah dibuat
    $siswaList = siswa::all();
    $guruList = guru::all();

    // Daftar pesan seputar anak TK
    $pesanList = [
        'Bagaimana cara menjaga kesehatan anak di TK?',
        'Apa yang harus dilakukan jika anak sulit beradaptasi?',
        'Apakah ada tips untuk meningkatkan perkembangan motorik anak?',
        'Bagaimana cara mengatasi anak yang pemalu?',
        'Apa yang harus diperhatikan dalam pola makan anak TK?',
        'Bagaimana cara mendukung perkembangan sosial anak?',
        'Apakah ada kegiatan yang bisa dilakukan di rumah untuk anak TK?',
        'Bagaimana cara mengajarkan anak tentang kebersihan?',
        'Apa yang harus dilakukan jika anak mengalami kesulitan belajar?',
        'Bagaimana cara mengenalkan anak pada konsep waktu?',
        'Apa yang harus dilakukan jika anak sering sakit?',
        'Bagaimana cara mengajarkan anak untuk berbagi?',
        'Apa yang harus diperhatikan dalam perkembangan bahasa anak?',
        'Bagaimana cara mengatasi anak yang tantrum?',
        'Apa yang harus dilakukan untuk mendukung kreativitas anak?'
    ];

    // Membuat data konsultasi untuk setiap siswa dan guru
    foreach ($siswaList as $index => $siswa) {
        // Mengambil guru secara bergantian untuk setiap siswa
        $guru = $guruList[$index % count($guruList)]; // Menggunakan modulus untuk menghindari out of bounds

        konsultasi::create([
            'guru_id' => $guru->id, // Mengambil guru_id dari guru yang ada
            'siswa_id' => $siswa->id, // Mengambil siswa_id dari siswa yang ada
            'pesan' => $pesanList[$index % count($pesanList)], // Mengambil pesan dari daftar pesan
            'kategori' => 'Tanya jawab', // Kategori
            'status' => 'proses', // Status
        ]);
    }
}
}
