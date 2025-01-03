<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['nik', 'nama', 'password', 'gender', 
    'no_telepon'];

    // If you want to use hashed passwords
    protected $hidden = ['password'];
}
