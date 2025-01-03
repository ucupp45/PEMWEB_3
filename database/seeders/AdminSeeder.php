<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan 15 data admin
        for ($i = 1; $i <= 15; $i++) {
            Admin::create([
                'nik' => '11111111111111' . str_pad($i, 2, '0', STR_PAD_LEFT), // NIK dinamis
                'nama' => 'Admin ' . $i, // Nama dinamis
                'gender' => $i % 2 == 0 ? 'P' : 'L', // Gender L/P secara bergantian
                'no_telepon' => '0823456789' . str_pad($i, 4, '0', STR_PAD_LEFT), // Nomor telepon dinamis
                'password' => bcrypt('adminpassword' . $i), // Password dinamis
            ]);
        }
    }
}
