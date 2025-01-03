<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataPelajaran = [
            ['mapel' => 'Matematika', 'deskripsi' => 'Pelajaran tentang angka dan rumus.'],
            ['mapel' => 'Bahasa Indonesia', 'deskripsi' => 'Pelajaran tentang tata bahasa dan sastra Indonesia.'],
            ['mapel' => 'IPA', 'deskripsi' => 'Pelajaran tentang ilmu pengetahuan alam.'],
            ['mapel' => 'IPS', 'deskripsi' => 'Pelajaran tentang ilmu pengetahuan sosial.'],
            ['mapel' => 'Bahasa Inggris', 'deskripsi' => 'Pelajaran tentang tata bahasa dan sastra Inggris.'],
        ];


    }
}
