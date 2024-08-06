<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAgunan extends Model
{
    use HasFactory;

    protected $table = 'data_agunan';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_agunan',
        'bukti_kepemilikan',
        'nomor_kepemilikan',
        'status_kepemilikan',
        'nama_agunan',
        'nama_pemilik',
        'tahun_agunan',
        'lokasi_agunan',
        'rincian_agunan',
        'nilai_taksasi',
        'foto_agunan_1',
        'foto_agunan_2',
        'foto_agunan_3'
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
