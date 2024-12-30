<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa; // Pastikan menggunakan model Siswa
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 15; $i++) {
            Siswa::create([
                'nik' => $faker->numerify('################'), // 16 digit NIK
                'nama' => $faker->name, // Nama siswa
                'tanggal_lahir' => $faker->dateTimeBetween('2019-01-01', '2019-12-31')->format('Y-m-d'), // Tahun 2019
                'gender' => $faker->randomElement(['L', 'P']), // Gender L atau P
                'nama_orang_tua' => $faker->name, // Nama orang tua
                'nomor_telepon' => $faker->numerify('08##########'), // Nomor telepon
                'alamat' => $faker->address, // Alamat acak
                'password' => Hash::make('password123'), // Password default
            ]);
        }
    }
}
