<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Membuat instance Faker untuk menghasilkan data dummy

        // Menambah 15 data guru
        for ($i = 0; $i < 15; $i++) {
            Guru::create([
                'nuptk' => $faker->unique()->numerify('##########'), // NUPTK 10 digit
                'nama' => $faker->name, // Nama guru
                'tanggal_lahir' => $faker->date('Y-m-d', '1980-01-01'), // Tanggal lahir
                'gender' => $faker->randomElement(['L', 'P']), // Gender (Laki-Laki/Perempuan)
                'password' => \Illuminate\Support\Facades\Hash::make('password123'), // Password yang di-hash
                'nomor_telepon' => $faker->phoneNumber, // Nomor telepon
                'alamat' => $faker->address, // Alamat
            ]);
        }
    }
}