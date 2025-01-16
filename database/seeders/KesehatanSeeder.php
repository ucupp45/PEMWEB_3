<?php

namespace Database\Seeders;

use App\Models\kesehatan;
use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // Mengambil semua siswa yang telah dibuat
    $siswaList = siswa::all();

    // Membuat data kesehatan untuk setiap siswa
    foreach ($siswaList as $siswa) {
        // Contoh tinggi badan dalam cm dan berat badan dalam kg
        $tinggiBadan = rand(140, 180); // Menghasilkan tinggi badan acak antara 140 cm dan 180 cm
        $beratBadan = rand(40, 100); // Menghasilkan berat badan acak antara 40 kg dan 100 kg

        // Menghitung IMT
        $imt = $beratBadan / (($tinggiBadan / 100) ** 2); // Rumus IMT: berat (kg) / (tinggi (m) ^ 2)

        kesehatan::create([
            'siswa_id' => $siswa->id, // Mengambil siswa_id dari siswa yang ada
            'tinggi_badan' => $tinggiBadan, // Tinggi badan acak
            'berat_badan' => $beratBadan, // Berat badan acak
            'imt' => round($imt, 2), // Indeks Massa Tubuh (IMT) dibulatkan hingga 2 desimal
            'keterangan' => 'Tidak ada keluhan kesehatan.', // Keterangan
        ]);
    }
}
}
