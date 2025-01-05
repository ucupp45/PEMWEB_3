<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajarans';

    protected $fillable = [
        'nama_pelajaran',
        'guru_id',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

}
