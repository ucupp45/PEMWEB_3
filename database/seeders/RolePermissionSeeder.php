<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'tambah-user']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'hapus-user']);
        Permission::create(['name'=>'lihat-user']);

        Permission::create(['name'=>'tambah-siswa']);
        Permission::create(['name'=>'edit-siswa']);
        Permission::create(['name'=>'hapus-siswa']);
        Permission::create(['name'=>'lihat-siswa']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'siswa']);
        Role::create(['name'=>'guru']);

        $roleAdmin = Role:: findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');

        $roleSiswa = Role:: findByName('siswa');
        $roleSiswa->givePermissionTo('tambah-siswa');
        $roleSiswa->givePermissionTo('edit-siswa');
        $roleSiswa->givePermissionTo('hapus-siswa');
        $roleSiswa->givePermissionTo('lihat-siswa');
    }
}
