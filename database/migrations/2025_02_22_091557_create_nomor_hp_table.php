<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::create('nomor_hp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penduduk')->constrained('penduduk')->onDelete('cascade');
            $table->string('nomor_hp');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomor_hp');
    }
};
