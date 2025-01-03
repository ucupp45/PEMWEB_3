<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataPelajaran = [
            ['nama' => 'Matematika', 'deskripsi' => 'Pelajaran tentang angka dan rumus.'],
            ['nama' => 'Bahasa Indonesia', 'deskripsi' => 'Pelajaran tentang tata bahasa dan sastra Indonesia.'],
            ['nama' => 'IPA', 'deskripsi' => 'Pelajaran tentang ilmu pengetahuan alam.'],
            ['nama' => 'IPS', 'deskripsi' => 'Pelajaran tentang ilmu pengetahuan sosial.'],
            ['nama' => 'Bahasa Inggris', 'deskripsi' => 'Pelajaran tentang tata bahasa dan sastra Inggris.'],
        ];


    }
}
