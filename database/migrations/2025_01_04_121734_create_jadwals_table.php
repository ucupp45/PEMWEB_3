<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade'); // Relasi dengan tabel guru
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran')->onDelete('cascade'); // Relasi dengan tabel mata_pelajaran
            $table->foreignId('ruangan_id')->constrained('ruangan')->onDelete('cascade'); // Relasi dengan tabel ruangan
            $table->dateTime('waktu'); // Waktu pelajaran
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
