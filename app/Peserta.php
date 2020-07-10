<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'regu_id',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kota',
        'kodepos',
        'email',
        'telp',
        'agama',
        'gol_darah',
        'sd_nama',
        'sd_tempat_tahun',
        'smp_nama',
        'smp_tempat_tahun',
        'sma_nama',
        'sma_tempat_tahun',
        'perti_nama',
        'perti_tempat_tahun',
        'siaga_tingkat',
        'siaga_tempat_tahun',
        'penggalang_tingkat',
        'penggalang_tempat_tahun',
        'penegak_tingkat',
        'penegak_tempat_tahun',
        'pandega_tingkat',
        'pandega_tempat_tahun',
        'kegiatan_1_nama',
        'kegiatan_1_tempat_tahun',
        'kegiatan_2_nama',
        'kegiatan_2_tempat_tahun',
        'kegiatan_3_nama',
        'kegiatan_3_tempat_tahun',
        'kegiatan_4_nama',
        'kegiatan_4_tempat_tahun',
        'kegiatan_5_nama',
        'kegiatan_5_tempat_tahun',
        'foto',
        'penyakit',
        'gangguan_jiwa',
        'patah_tlang',
        'sedang_perawatan',
        'ketergantungan_obat',
        'surat_sehat',
        'kartu_pelajar',
        'jabatan',
        'tinggi_badan',
        'berat_badan',
    ];

    protected $appends = ['foto_url','surat_sehat_url', 'kartu_pelajar_url'];

    public function getFotoUrlAttribute()
    {
        return $this->attributes['surat_sehat_url'] = asset('images/regu/'.$this->regu_id.'/'.$this->foto);
    }

    public function getSuratSehatUrlAttribute()
    {
        return $this->attributes['surat_sehat_url'] = asset('images/regu/'.$this->regu_id.'/'.$this->surat_sehat);
    }

    public function getKartuPelajarUrlAttribute()
    {
        return $this->attributes['kartu_pelajar_url'] = asset('images/regu/'.$this->regu_id.'/'.$this->kartu_pelajar);
    }
}
