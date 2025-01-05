<?php

namespace Database\Seeders;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh data nilai
        $data_nilai = [
            [
                'siswa_id' => 1,  // Pastikan ID siswa ini ada di tabel 'siswa'
                'pelajaran_id' => 1, // Pastikan ID pelajaran ini ada di tabel 'pelajarans'
                'nilai' => 85.00,
            ],
            [
                'siswa_id' => 1,
                'pelajaran_id' => 2,
                'nilai' => 90.50,
            ],
            [
                'siswa_id' => 2,
                'pelajaran_id' => 1,
                'nilai' => 78.00,
            ],
            [
                'siswa_id' => 2,
                'pelajaran_id' => 2,
                'nilai' => 82.75,
            ],
            [
                'siswa_id' => 3,
                'pelajaran_id' => 1,
                'nilai' => 88.25,
            ],
            [
                'siswa_id' => 3,
                'pelajaran_id' => 2,
                'nilai' => 91.00,
            ],
        ];

        // Insert data ke dalam tabel nilais
        Nilai::insert($data_nilai);
    }
}
