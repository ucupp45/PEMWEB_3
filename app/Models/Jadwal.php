<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
        'pelajaran_id',
        'ruangan_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
    ];

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
