<?php
namespace Database\Seeders;
use App\Models\Pelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_pelajaran = [
            [
                'nama_pelajaran' => 'Matematika',
                'guru_id' => 1, // Pastikan ID guru sudah ada di tabel guru
            ],
            [
                'nama_pelajaran' => 'Bahasa Indonesia',
                'guru_id' => 2, // Pastikan ID guru sudah ada di tabel guru
            ],
            [
                'nama_pelajaran' => 'Fisika',
                'guru_id' => 1,
            ],
            [
                'nama_pelajaran' => 'Kimia',
                'guru_id' => 3,
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ];
        // Insert data ke dalam tabel pelajarans
        Pelajaran::insert($data_pelajaran);
    }
}