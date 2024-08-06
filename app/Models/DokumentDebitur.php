<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenDebitur extends Model
{
    use HasFactory;

    protected $table = 'dokumen_debitur';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_dokumen',
        'nama_dokumen',
        'tanggal_terbit',
        'catatan',
        'foto_dokumen'
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
