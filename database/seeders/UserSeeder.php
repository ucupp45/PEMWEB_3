<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat pengguna admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        // Membuat 14 pengguna admin tambahan
        for ($i = 1; $i <= 14; $i++) {
            $adminUser  = User::create([
                'name' => 'Admin ' . $i,
                'email' => 'admin' . $i . '@example.com',
                'password' => bcrypt('12345678'),
            ]);
            $adminUser->assignRole('admin');
        }

        // Membuat pengguna siswa
        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@example.com',
            'password' => bcrypt('12345678'),
        ]);
        $siswa->assignRole('siswa');

        // Membuat 14 pengguna siswa tambahan
        for ($i = 1; $i <= 14; $i++) {
            $studentUser  = User::create([
                'name' => 'Siswa ' . $i,
                'email' => 'siswa' . $i . '@example.com',
                'password' => bcrypt('12345678'),
            ]);
            $studentUser->assignRole('siswa');
        }

        // Membuat pengguna guru
        $guru = User::create([
            'name' => 'guru',
            'email' => 'guru@example.com',
            'password' => bcrypt('12345678'),
        ]);
        $guru->assignRole('guru');

        // Membuat 14 pengguna guru tambahan
        for ($i = 1; $i <= 14; $i++) {
            $teacherUser  = User::create([
                'name' => 'Guru ' . $i,
                'email' => 'guru' . $i . '@example.com',
                'password' => bcrypt('12345678'),
            ]);
            $teacherUser->assignRole('guru');
        }
    }
}
