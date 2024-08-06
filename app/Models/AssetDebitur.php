<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetDebitur extends Model
{
    use HasFactory;

    protected $table = 'asset_debitur';

    protected $fillable = [
        'debitur_id',
        'permohonan_id',
        'jenis_aset',
        'nama_aset',
        'tahun_aset',
        'nomor_aset',
        'nama_pemilik',
        'nilai_aset',
        'foto_aset_1',
        'foto_aset_2',
        'foto_aset_3'
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
