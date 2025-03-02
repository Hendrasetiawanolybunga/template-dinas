<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('penduduk_layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penduduk')->constrained('penduduk')->onDelete('cascade');
            $table->foreignId('id_layanan')->constrained('layanan')->onDelete('cascade');
            $table->date('tanggal_pengajuan');
            $table->string('tracking_code')->unique(); // Hapus "after('id_layanan')"
            $table->enum('status', ['Diajukan', 'Verifikasi Dokumen', 'Menunggu Persetujuan', 'Diproses', 'Selesai', 'Ditolak'])
                  ->default('Diajukan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk_layanan');
    }
};
