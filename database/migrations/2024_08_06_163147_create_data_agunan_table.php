<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_agunan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit');
            $table->string('jenis_agunan', 255);
            $table->string('bukti_kepemilikan', 255);
            $table->string('nomor_kepemilikan', 255);
            $table->string('status_kepemilikan', 255);
            $table->string('nama_agunan', 255);
            $table->string('nama_pemilik', 255);
            $table->integer('tahun_agunan');
            $table->text('lokasi_agunan');
            $table->text('rincian_agunan');
            $table->decimal('nilai_taksasi', 15, 2);
            $table->string('foto_agunan_1', 255)->nullable();
            $table->string('foto_agunan_2', 255)->nullable();
            $table->string('foto_agunan_3', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_agunan');
    }
};
