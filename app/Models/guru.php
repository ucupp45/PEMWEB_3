<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    // Table name (optional if you use the default naming convention)
    protected $table = 'guru';

    // The attributes that are mass assignable.
    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'gender',
        'pendidikan',
        'tanggal_lahir',
    ];

    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);
    }

    // One-to-Many Relationship with Chat Konsultasi (Consultation Chat)
    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class);
    }
}
