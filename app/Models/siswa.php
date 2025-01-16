<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    // Table name (optional if you use the default naming convention)
    protected $table = 'siswa';

    // The attributes that are mass assignable.
    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'gender',
        'nama_ortu',
        'tanggal_lahir',
    ];

    // Define the relationship with the User model
    public function kesehatan()
    {
        return $this->hasMany(Kesehatan::class);
    }

    // One-to-Many Relationship with Chat Konsultasi (Consultation Chat)
    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class);
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
