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
        Schema::create('dokumen_debitur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit');
            $table->string('jenis_dokumen', 255);
            $table->string('nama_dokumen', 255);
            $table->date('tanggal_terbit');
            $table->text('catatan')->nullable();
            $table->string('foto_dokumen', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_debitur');
    }
};
