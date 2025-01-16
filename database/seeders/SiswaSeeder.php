<?php

namespace Database\Seeders;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil semua pengguna dengan role 'siswa'
        $siswaUsers = User::whereHas('roles', function ($query) {
            $query->where('name', 'siswa');
        })->get();

        // Membuat data siswa untuk setiap user
        foreach ($siswaUsers as $index => $user) {
            siswa::create([
                'user_id' => $user->id,
                'nama' => 'Siswa ' . ($index + 1), // Nama siswa
                'alamat' => 'Alamat Siswa ' . ($index + 1), // Alamat siswa
                'gender' => $index % 2 == 0 ? 'P' : 'L', // Gender bergantian
                'nama_ortu' => 'Nama Orang Tua ' . ($index + 1), // Nama orang tua
                'tanggal_lahir' => '2010-05-15', // Tanggal lahir
            ]);
        }
    }
}
