<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regu extends Model
{
    protected $fillable = [
        'nama', 
        'user_id', 
        'jenis_kelamin',
        'status',
        'konfirmasi_pembayaran',
        'no_dada',
        'giat_a',
        'giat_b',
        'giat_c',
        'giat_d',
        'giat_e',
        'giat_f',
        'giat_g'
    ];

    protected $appends = ['konfirmasi','status_regu','gender','gudep','tgl_daftar'];

    public function getKonfirmasiAttribute()
    {
        return $this->attributes['konfirmasi'] = asset('images/konfirmasi/'.$this->konfirmasi_pembayaran);
    }
    public function getGenderAttribute()
    {
        return $this->attributes['gender'] = ($this->jenis_kelamin == 'perempuan') ? 'Perempuan' : 'Laki - Laki';
    }
    public function getGudepAttribute()
    {
        return $this->attributes['gudep'] = $this->user->gudep;
    }
    public function getTglDaftarAttribute()
    {
        return $this->attributes['tgl_daftar'] = $this->created_at->format('d-m-Y');
    }

    public function getStatusReguAttribute()
    {
        if( ! empty($this->status) )
        {
            if ( $this->status == 'menunggu_pembayaran' )
                return  $this->attributes['status_regu'] = '<span class="badge badge-danger">Menunggu Pembayaran</span>';
            elseif( $this->status == 'menunggu_konfirmasi' )
                return $this->attributes['status_regu'] = '<span class="badge badge-primary">Menunggu Konfirmasi</span>';
            else
                return $this->attributes['status_regu'] = '<span class="badge badge-success">Pembayaran Sukses</span>';
        }else{
            return $this->attributes['status_regu'] = '<span class="badge badge-danger">Menunggu Pembayaran</span>';
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function peserta()
    {
        return $this->hasMany('App\Peserta');
    }
}
