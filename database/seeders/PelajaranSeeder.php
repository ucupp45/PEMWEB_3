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
            ['nama_pelajaran' => 'Matematika Dasar' ],
            ['nama_pelajaran' => 'Bahasa Indonesia' ],
            ['nama_pelajaran' => 'Bahasa Inggris' ],
            ['nama_pelajaran' => 'Ilmu Pengetahuan Alam' ],
            ['nama_pelajaran' => 'Ilmu Pengetahuan Sosial' ],
            ['nama_pelajaran' => 'Pendidikan Kewarganegaraan' ],
            ['nama_pelajaran' => 'Pendidikan Jasmani' ],
            ['nama_pelajaran' => 'Seni Budaya' ],
            ['nama_pelajaran' => 'Fisika' ],
            ['nama_pelajaran' => 'Kimia'],
            ['nama_pelajaran' => 'Biologi' ],
            ['nama_pelajaran' => 'Ekonomi'],
            ['nama_pelajaran' => 'Geografi' ],
            ['nama_pelajaran' => 'Sejarah' ],
            ['nama_pelajaran' => 'Teknologi Informasi' ],
        ];

        foreach ($dataPelajaran as $pelajaran) {
            Pelajaran::create($pelajaran);
        }
    }
}
