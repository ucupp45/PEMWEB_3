<?php

namespace Database\Seeders;

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
            RolePermissionSeeder::class,
            UserSeeder::class,
            SiswaSeeder::class,
            GuruSeeder::class,
            PelajaranSeeder::class,
            NilaiSeeder::class,
            JadwalSeeder::class,
            KonsultasiSeeder::class,
            KesehatanSeeder::class, 
        ]);
    }
}
