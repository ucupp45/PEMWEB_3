<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapel = [
            'AGAMA',
            'Bahasa Indonesia',
            'Matematika',
            'Bahasa Daerah'
        ];

        foreach ($mapel as $mapel){
            Mapel::create(['mapel => $mapel']);
        };
    }
}
