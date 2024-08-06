<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanKredit extends Model
{
    use HasFactory;

    protected $table = 'permohonan_kredit';

    protected $fillable = [
        'debitur_id',
        'jenis_permohonan',
        'jenis_produk',
        'nilai_permohonan',
        'jangka_waktu',
        'tujuan_penggunaan',
        'sumber_bayar',
        'account_officer',
        'analis_kredit',
        'surveyor'
    ];

    public function debitur()
    {
        return $this->belongsTo(Debitur::class);
    }

    public function dataPekerjaan()
    {
        return $this->hasMany(DataPekerjaan::class);
    }

    public function assetDebitur()
    {
        return $this->hasMany(AssetDebitur::class);
    }

    public function kewajibanDebitur()
    {
        return $this->hasMany(KewajibanDebitur::class);
    }

    public function dataAgunan()
    {
        return $this->hasMany(DataAgunan::class);
    }

    public function biayaDebitur()
    {
        return $this->hasMany(BiayaDebitur::class);
    }

    public function gajiDebitur()
    {
        return $this->hasMany(GajiDebitur::class);
    }

    public function dokumenDebitur()
    {
        return $this->hasMany(DokumenDebitur::class);
    }
}
