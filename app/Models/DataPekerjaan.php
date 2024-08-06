<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'data_pekerjaan';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'nama_instansi',
        'alamat_instansi',
        'status_pekerja',
        'jangka_waktu_kontrak',
        'lama_bekerja',
        'bidang_perusahaan'
    ];

    public function debitur()
    {
        return $this->belongsTo(Debitur::class);
    }

    public function permohonanKredit()
    {
        return $this->belongsTo(PermohonanKredit::class, 'permohonan_id');
    }
}
