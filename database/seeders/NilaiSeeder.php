<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nilai;


class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataNilai = [
            ['siswa_id' => 1, 'pelajaran_id' => 1, 'nilai' => 85.5],
            ['siswa_id' => 2, 'pelajaran_id' => 2, 'nilai' => 78.0],
            ['siswa_id' => 3, 'pelajaran_id' => 3, 'nilai' => 90.2],
            ['siswa_id' => 4, 'pelajaran_id' => 4, 'nilai' => 65.7],
            ['siswa_id' => 5, 'pelajaran_id' => 5, 'nilai' => 88.0],
            ['siswa_id' => 6, 'pelajaran_id' => 1, 'nilai' => 76.8],
            ['siswa_id' => 7, 'pelajaran_id' => 2, 'nilai' => 92.5],
            ['siswa_id' => 8, 'pelajaran_id' => 3, 'nilai' => 55.4],
            ['siswa_id' => 9, 'pelajaran_id' => 4, 'nilai' => 63.9],
            ['siswa_id' => 10, 'pelajaran_id' => 5, 'nilai' => 81.3],
            ['siswa_id' => 11, 'pelajaran_id' => 1, 'nilai' => 70.0],
            ['siswa_id' => 12, 'pelajaran_id' => 2, 'nilai' => 95.1],
            ['siswa_id' => 13, 'pelajaran_id' => 3, 'nilai' => 89.6],
            ['siswa_id' => 14, 'pelajaran_id' => 4, 'nilai' => 73.2],
            ['siswa_id' => 15, 'pelajaran_id' => 5, 'nilai' => 82.7],
        ];

        foreach ($dataNilai as $nilai) {
            Nilai::create($nilai);
        }
    }
}
