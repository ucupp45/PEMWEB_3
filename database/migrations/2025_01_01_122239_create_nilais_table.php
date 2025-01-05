<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTablenew extends Migration
{
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade'); // Relasi dengan tabel siswa
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->onDelete('cascade'); // Relasi dengan tabel mata_pelajaran
            $table->integer('nilai'); // Nilai yang diperoleh siswa
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nilai');
    }
}

