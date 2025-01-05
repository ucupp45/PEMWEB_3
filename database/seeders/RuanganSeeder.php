<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('ruangans')->insert([
            [
                'nama_ruangan' => 'Ruang A',
                'lokasi' => 'Lantai 1',
            ],
            [
                'nama_ruangan' => 'Ruang B',
                'lokasi' => 'Lantai 2',
            ],
            [
                'nama_ruangan' => 'Ruang C',
                'lokasi' => 'Lantai 3',
            ],
            [
                'nama_ruangan' => 'Ruang D',
                'lokasi' => 'Lantai 1',
            ],
            [
                'nama_ruangan' => 'Ruang E',
                'lokasi' => 'Lantai 2',
            ],
        ]);
    }
}
