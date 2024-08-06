<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiDebitur extends Model
{
    use HasFactory;

    protected $table = 'gaji_debitur';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_gaji',
        'jenis_tunjangan_potongan',
        'nama_tunjangan_potongan',
        'nilai_tunjangan_potongan'
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
