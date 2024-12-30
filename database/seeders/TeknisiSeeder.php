<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teknisi;

class TeknisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan 15 data teknisi
        for ($i = 1; $i <= 15; $i++) {
            Teknisi::create([
                'nik' => '12345678901234' . str_pad($i, 2, '0', STR_PAD_LEFT), // NIK dinamis
                'nama' => 'Teknisi ' . $i, // Nama dinamis
                'gender' => $i % 2 == 0 ? 'P' : 'L', // Gender L/P secara bergantian
                'no_telepon' => '0812345678' . str_pad($i, 4, '0', STR_PAD_LEFT), // Nomor telepon dinamis
                'password' => bcrypt('password' . $i), // Password dinamis
            ]);
        }
    }
}
