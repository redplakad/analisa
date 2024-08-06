<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debitur extends Model
{
    use HasFactory;

    protected $table = 'debitur';

    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'alamat',
        'status_perkawinan',
        'nama_pasangan',
        'nik_pasangan',
        'jumlah_anak',
        'status_tempat_tinggal',
        'no_hp',
        'no_wa',
        'no_npwp'
    ];

    public function permohonanKredit()
    {
        return $this->hasMany(PermohonanKredit::class);
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
