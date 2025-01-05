<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'gender',
        'nama_orang_tua',
        'nomor_telepon',
        'alamat',
        'password', // Kolom baru
    ];

      // Relasi dengan Nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'siswa_id');
    }
    
    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
