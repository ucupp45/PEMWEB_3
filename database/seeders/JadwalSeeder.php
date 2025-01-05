<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            [
                'pelajaran_id' => 1, // Replace with an actual pelajaran_id from your pelajarans table
                'ruangan_id' => 1,   // Replace with an actual ruangan_id from your ruangans table
                'tanggal' => Carbon::parse('2025-01-06')->toDateString(),
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
            ],
            [
                'pelajaran_id' => 2,
                'ruangan_id' => 2,
                'tanggal' => Carbon::parse('2025-01-06')->toDateString(),
                'jam_mulai' => '10:30:00',
                'jam_selesai' => '12:30:00',
            ],
            [
                'pelajaran_id' => 3,
                'ruangan_id' => 3,
                'tanggal' => Carbon::parse('2025-01-06')->toDateString(),
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '15:00:00',
            ],
            [
                'pelajaran_id' => 1,
                'ruangan_id' => 4,
                'tanggal' => Carbon::parse('2025-01-07')->toDateString(),
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '10:00:00',
            ],
            [
                'pelajaran_id' => 2,
                'ruangan_id' => 5,
                'tanggal' => Carbon::parse('2025-01-07')->toDateString(),
                'jam_mulai' => '10:30:00',
                'jam_selesai' => '12:30:00',
            ],
        ]);
    }
}
