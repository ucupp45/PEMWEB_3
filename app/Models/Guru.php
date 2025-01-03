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

}
