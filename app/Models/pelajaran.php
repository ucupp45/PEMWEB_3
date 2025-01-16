<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory;

     // Table name (optional if you use the default naming convention)
     protected $table = 'pelajaran';

     // The attributes that are mass assignable.
     protected $fillable = [
         'guru_id',
         'nama',
         'ruangan',
         'keterangan',
     ];
 
     // One-to-Many Relationship with Nilai (Grades)
    public function nilai()
    {
        return $this->hasOne(Guru::class);
    }


}
