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
        Schema::create('permohonan_kredit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debitur_id')->constrained('debitur')->onDelete('cascade');
            $table->string('jenis_permohonan', 255);
            $table->string('jenis_produk', 255);
            $table->decimal('nilai_permohonan', 15, 2);
            $table->integer('jangka_waktu');
            $table->text('tujuan_penggunaan');
            $table->string('sumber_bayar', 255);
            $table->string('account_officer', 255);
            $table->string('analis_kredit', 255);
            $table->string('surveyor', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan_kredit');
    }
};
