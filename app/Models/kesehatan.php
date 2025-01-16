<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kesehatan extends Model
{
    use HasFactory;

     // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
     protected $table = 'kesehatan';

     // Tentukan kolom yang dapat diisi
     protected $fillable = [
         'siswa_id', // Relasi ke siswa
         'tinggi_badan',
         'berat_badan',
         'imt',
         'keterangan',
     ];
 
     // Relasi ke siswa (One-to-One)
     public function siswa()
     {
         return $this->belongsTo(Siswa::class);
     }
    
}
