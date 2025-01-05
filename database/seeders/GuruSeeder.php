<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 15; $i++) {
            Guru::create([
                'nuptk' => $faker->numerify('################'), // 16 digit NUPTK
                'nama' => $faker->name, // Nama Guru
                'tanggal_lahir' => $faker->dateTimeBetween('1990-01-01', '2005-10-10')->format('Y-m-d'), // Tahun 1990
                'gender' => $faker->randomElement(['L', 'P']), // Gender L atau P
                'password' => Hash::make('password123'), // Password default
                'nomor_telepon' => $faker->numerify('08##########'), // Nomor telepon
                'alamat' => $faker->address, // Alamat acak
            ]);
        }
    }
}
