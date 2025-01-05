<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuanganTable extends Migration
{
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('kode'); // Kode ruangan
            $table->string('nama'); // Nama ruangan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ruangan');
    }
}
