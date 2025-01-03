<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->unique('nik')(); // Kolom NIK (unik)
            $table->string('nama'); // Kolom nama
            $table->date('tanggal_lahir'); // Kolom tanggal lahir
            $table->enum('gender', ['L', 'P']); // Kolom gender (L = Laki-laki, P = Perempuan)
            $table->string('nama_orang_tua'); // Kolom nama orang tua
            $table->string('nomor_telepon')->nullable(); // Kolom nomor telepon (opsional)
            $table->text('alamat'); // Kolom alamat
            $table->string('password'); // Tambahkan kolom password
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
