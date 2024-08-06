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
        Schema::create('gaji_debitur', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur');
            $table->foreignId('permohonan_id')->constrained('permohonan_kredit');
            $table->string('jenis_gaji', 255);
            $table->string('jenis_tunjangan_potongan', 255);
            $table->string('nama_tunjangan_potongan', 255);
            $table->decimal('nilai_tunjangan_potongan', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gaji_debitur');
    }
};
