<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'password', 'gender', 'no_telepon'];

    // Jika Anda ingin menyembunyikan password saat mengambil data
    protected $hidden = ['password'];
}
