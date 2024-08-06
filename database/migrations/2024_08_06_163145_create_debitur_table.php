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
        Schema::create('debitur', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 20);
            $table->string('nama', 255);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('pekerjaan', 255);
            $table->text('alamat');
            $table->string('status_perkawinan', 50);
            $table->string('nama_pasangan', 255)->nullable();
            $table->string('nik_pasangan', 20)->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->string('status_tempat_tinggal', 50);
            $table->string('no_hp', 20);
            $table->string('no_wa', 20)->nullable();
            $table->string('no_npwp', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debitur');
    }
};
