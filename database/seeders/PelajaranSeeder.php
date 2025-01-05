<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelajaran;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPelajaran = [
            ['nama_pelajaran' => 'Matematika Dasar', 'guru_id' => 1],
            ['nama_pelajaran' => 'Bahasa Indonesia', 'guru_id' => 2],
            ['nama_pelajaran' => 'Bahasa Inggris', 'guru_id' => 3],
            ['nama_pelajaran' => 'Ilmu Pengetahuan Alam', 'guru_id' => 4],
            ['nama_pelajaran' => 'Ilmu Pengetahuan Sosial', 'guru_id' => 5],
            ['nama_pelajaran' => 'Pendidikan Kewarganegaraan', 'guru_id' => 6],
            ['nama_pelajaran' => 'Pendidikan Jasmani', 'guru_id' => 7],
            ['nama_pelajaran' => 'Seni Budaya', 'guru_id' => 8],
            ['nama_pelajaran' => 'Fisika', 'guru_id' => 9],
            ['nama_pelajaran' => 'Kimia', 'guru_id' => 10],
            ['nama_pelajaran' => 'Biologi', 'guru_id' => 11],
            ['nama_pelajaran' => 'Ekonomi', 'guru_id' => 12],
            ['nama_pelajaran' => 'Geografi', 'guru_id' => 13],
            ['nama_pelajaran' => 'Sejarah', 'guru_id' => 14],
            ['nama_pelajaran' => 'Teknologi Informasi', 'guru_id' => 15],
        ];

        foreach ($dataPelajaran as $pelajaran) {
            Pelajaran::create($pelajaran);
        }
    }
}
