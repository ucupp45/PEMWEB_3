<?php

namespace Database\Seeders;

use App\Models\guru;
use App\Models\pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // Mengambil semua guru yang telah dibuat
    $gurus = guru::all();

    // Membuat data pelajaran untuk setiap guru
    foreach ($gurus as $index => $guru) {
        pelajaran::create([
            'guru_id' => $guru->id, // Mengambil guru_id dari guru yang ada
            'nama' => 'Pelajaran ' . ($index + 1), // Nama pelajaran
            'ruangan' => 'A' . ($index + 1), // Ruangan, misalnya A1, A2, ...
            'keterangan' => 'Pelajaran untuk kelas ' . ($index + 1), // Keterangan
        ]);
    }
}
}
