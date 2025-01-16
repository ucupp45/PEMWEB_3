<?php

namespace Database\Seeders;

use App\Models\nilai;
use App\Models\pelajaran;
use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil semua siswa dan pelajaran yang telah dibuat
        $siswaList = siswa::all();
        $pelajaranList = pelajaran::all();
    
        // Membuat data nilai untuk setiap siswa dan pelajaran
        foreach ($siswaList as $index => $siswa) {
            // Mengambil pelajaran secara bergantian untuk setiap siswa
            $pelajaran = $pelajaranList[$index % count($pelajaranList)]; // Menggunakan modulus untuk menghindari out of bounds
    
            nilai::create([
                'pelajaran_id' => $pelajaran->id, // Mengambil pelajaran_id dari pelajaran yang ada
                'siswa_id' => $siswa->id, // Mengambil siswa_id dari siswa yang ada
                'nilai' => rand(70, 100), // Menghasilkan nilai acak antara 70 dan 100
                'kategori' => 'Ulangan Harian', // Kategori nilai
                'keterangan' => 'Nilai ulangan harian untuk ' . $pelajaran->nama, // Keterangan
            ]);
        }
    }
}
