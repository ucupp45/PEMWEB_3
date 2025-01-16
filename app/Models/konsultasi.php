<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;

    // Table name (optional if you use the default naming convention)
    protected $table = 'konsultasi';
    protected $attributes = [
        'status' => 'proses', // Default status adalah 'proses'
    ];

    // The attributes that are mass assignable.
    protected $fillable = [
        'guru_id',
        'siswa_id',
        'pesan',
        'kategori',
        'status',
    ];

   // BelongsTo Relationship with Siswa (Student)
   public function siswa()
   {
       return $this->belongsTo(Siswa::class);
   }

   // BelongsTo Relationship with Guru (Teacher)
   public function guru()
   {
       return $this->belongsTo(Guru::class);
   }
}
