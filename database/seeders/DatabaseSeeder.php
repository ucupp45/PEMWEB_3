<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SiswaSeeder::class,
        ]);

        $this->call([
            GuruSeeder::class, // Menambahkan GuruSeeder
        ]);

        $this->call([
            NilaiSeeder::class,
            // Seeder lain yang ingin Anda panggil
        ]);
        $this->call([
            PelajaranSeeder::class,
            // Seeder lain yang ingin Anda panggil
        ]);
    }

}
