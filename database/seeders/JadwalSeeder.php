<?php

namespace Database\Seeders;

use App\Models\guru;
use App\Models\jadwal;
use App\Models\pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil semua pelajaran dan guru yang telah dibuat
        $pelajarans = pelajaran::all();
        $gurus = guru::all();
    
        // Membuat data jadwal untuk setiap pelajaran dan guru
        foreach ($pelajarans as $index => $pelajaran) {
            // Mengambil guru secara bergantian untuk setiap pelajaran
            $guru = $gurus[$index % count($gurus)]; // Menggunakan modulus untuk menghindari out of bounds
    
            jadwal::create([
                'pelajaran_id' => $pelajaran->id, // Mengambil pelajaran_id dari pelajaran yang ada
                'guru_id' => $guru->id, // Mengambil guru_id dari guru yang ada
                'ruangan' => 'A' . ($index + 1), // Ruangan, misalnya A1, A2, ...
                'waktu_mulai' => '2025-01-15 08:00:00', // Waktu mulai
                'waktu_selesai' => '2025-01-15 10:00:00', // Waktu selesai
            ]);
        }
    }
}
