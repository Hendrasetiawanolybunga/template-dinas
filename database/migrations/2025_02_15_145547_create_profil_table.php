<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dinas');
            $table->text('visi');
            $table->text('misi');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->string('struktur_organisasi')->nullable(); // Menyimpan path gambar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
};
