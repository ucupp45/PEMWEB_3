<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    use HasFactory;

    // Table name (optional if you use the default naming convention)
    protected $table = 'nilai';

    // The attributes that are mass assignable.
    protected $fillable = [
        'pelajaran_id',
        'siswa_id',
        'nilai',
        'kategori',
        'keterangan',
    ];

    // Define the relationship with the Pelajaran model
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }

    // Define the relationship with the Siswa model
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
