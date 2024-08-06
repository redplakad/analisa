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
        Schema::create('asset_debitur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit');
            $table->string('jenis_aset', 255);
            $table->string('nama_aset', 255);
            $table->integer('tahun_aset');
            $table->string('nomor_aset', 255);
            $table->string('nama_pemilik', 255);
            $table->decimal('nilai_aset', 15, 2);
            $table->string('foto_aset_1', 255)->nullable();
            $table->string('foto_aset_2', 255)->nullable();
            $table->string('foto_aset_3', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_debitur');
    }
};
