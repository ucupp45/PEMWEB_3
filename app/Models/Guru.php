<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

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

    // Enkripsi password sebelum disimpan
    public static function boot()
    {
        parent::boot();

        static::creating(function ($guru) {
            // Enkripsi password saat guru baru dibuat
            $guru->password = Hash::make($guru->password);
        });

        static::updating(function ($guru) {
            // Enkripsi password saat guru diperbarui
            if ($guru->isDirty('password')) {
                $guru->password = Hash::make($guru->password);
            }
        });
    }
}
