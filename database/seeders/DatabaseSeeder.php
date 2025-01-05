<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Pelajaran;
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
        GuruSeeder::class,
        NilaiSeeder::class,
        PelajaranSeeder::class,
        GuruSeeder::class,
    ]);

    // $this->call([
    //     GuruSeeder::class, // Menambahkan GuruSeeder
    // ]);
}

}
