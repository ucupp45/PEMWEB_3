<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan 15 data Admin
        Admin::create([
            'nik' => '1234567890123456',
            'nama' => 'Admin Pertama',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567890',
        ]);
        
        Admin::create([
            'nik' => '1234567890123457',
            'nama' => 'Admin Kedua',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567891',
        ]);

        Admin::create([
            'nik' => '1234567890123458',
            'nama' => 'Admin Ketiga',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567892',
        ]);

        Admin::create([
            'nik' => '1234567890123459',
            'nama' => 'Admin Keempat',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567893',
        ]);

        Admin::create([
            'nik' => '1234567890123460',
            'nama' => 'Admin Kelima',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567894',
        ]);

        Admin::create([
            'nik' => '1234567890123461',
            'nama' => 'Admin Keenam',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567895',
        ]);

        Admin::create([
            'nik' => '1234567890123462',
            'nama' => 'Admin Ketujuh',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567896',
        ]);

        Admin::create([
            'nik' => '1234567890123463',
            'nama' => 'Admin Kedelapan',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567897',
        ]);

        Admin::create([
            'nik' => '1234567890123464',
            'nama' => 'Admin Kesembilan',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567898',
        ]);

        Admin::create([
            'nik' => '1234567890123465',
            'nama' => 'Admin Kesepuluh',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567899',
        ]);

        Admin::create([
            'nik' => '1234567890123466',
            'nama' => 'Admin Kesebelas',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567900',
        ]);

        Admin::create([
            'nik' => '1234567890123467',
            'nama' => 'Admin Keduabelas',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567901',
        ]);

        Admin::create([
            'nik' => '1234567890123468',
            'nama' => 'Admin Ketigabelas',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567902',
        ]);

        Admin::create([
            'nik' => '1234567890123469',
            'nama' => 'Admin Keempatbelas',
            'password' => Hash::make('password123'),
            'gender' => 'P',
            'no_telepon' => '081234567903',
        ]);

        Admin::create([
            'nik' => '1234567890123470',
            'nama' => 'Admin Kelimabelas',
            'password' => Hash::make('password123'),
            'gender' => 'L',
            'no_telepon' => '081234567904',
        ]);
    }
}
