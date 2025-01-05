<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaranTable extends Migration
{
    public function up()
    {
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama mata pelajaran
            $table->foreignId('guru_id')->constrained('guru')->onDelete('cascade'); // Relasi dengan tabel guru
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mata_pelajaran');
    }
}
