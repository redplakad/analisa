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
        Schema::create('data_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur')->onDelete('cascade');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit')->onDelete('cascade');
            $table->string('nama_instansi', 255);
            $table->text('alamat_instansi');
            $table->string('status_pekerja', 50);
            $table->integer('jangka_waktu_kontrak')->nullable();
            $table->integer('lama_bekerja');
            $table->string('bidang_perusahaan', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pekerjaan');
    }
};
