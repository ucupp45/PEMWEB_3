<?php

namespace Database\Seeders;

use App\Models\guru;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil semua pengguna dengan role 'guru'
        $guruUsers = User::whereHas('roles', function ($query) {
            $query->where('name', 'guru');
        })->get();

        // Membuat data guru untuk setiap user
        foreach ($guruUsers as $index => $user) {
            guru::create([
                'user_id' => $user->id,
                'nama' => 'Guru ' . ($index + 1), // Nama guru
                'alamat' => 'Alamat Guru ' . ($index + 1), // Alamat guru
                'gender' => $index % 2 == 0 ? 'L' : 'P', // Gender bergantian
                'pendidikan' => 'S1', // Pendidikan
                'tanggal_lahir' => '1985-07-21', // Tanggal lahir
            ]);
        }
    }
}
