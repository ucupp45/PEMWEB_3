<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';

    // The attributes that are mass assignable.
    protected $fillable = [
        'pelajaran_id',
        'guru_id',
        'ruangan',
        'waktu_mulai',
        'waktu_selesai',
    ];

    // BelongsTo Relationship with Pelajaran (Lesson)
    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }

    // BelongsTo Relationship with Guru (Teacher)
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
