<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaDebitur extends Model
{
    use HasFactory;

    protected $table = 'biaya_debitur';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_biaya',
        'nama_biaya',
        'nilai_biaya'
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
