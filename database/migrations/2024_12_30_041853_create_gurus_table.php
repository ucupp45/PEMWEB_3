-<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nuptk')->unique(); // NUPTK
            $table->string('nama'); // Nama Guru
            $table->date('tanggal_lahir'); // Tanggal Lahir
            $table->enum('gender', ['L', 'P']); // Gender (Laki-laki/Perempuan)
            $table->string('password'); // Password
            $table->string('nomor_telepon')->nullable(); // Nomor Telepon
            $table->text('alamat'); // Alamat
            $table->timestamps(); // Tanggal buat dan update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
