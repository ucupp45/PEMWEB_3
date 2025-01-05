<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; // Tabel yang digunakan
    protected $fillable = [
        'nuptk',
        'nama',
        'tanggal_lahir',
        'gender',
        'password',
        'nomor_telepon',
        'alamat'
    ];

    // Relasi dengan MataPelajaran
    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);
    }
    // Relasi dengan Jadwal
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

}
