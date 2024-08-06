<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KewajibanDebitur extends Model
{
    use HasFactory;

    protected $table = 'kewajiban_debitur';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_kewajiban',
        'tanggal_kewajiban',
        'nama_kewajiban',
        'nilai_kewajiban'
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
