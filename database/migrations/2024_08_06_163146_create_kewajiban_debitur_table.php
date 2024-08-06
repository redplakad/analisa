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
        Schema::create('kewajiban_debitur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit');
            $table->string('jenis_kewajiban', 255);
            $table->date('tanggal_kewajiban');
            $table->string('nama_kewajiban', 255);
            $table->decimal('nilai_kewajiban', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kewajiban_debitur');
    }
};
