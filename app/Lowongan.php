<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lowongan extends Model
{

    public $table = 'lowongan';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'namaperusahaan',
        'idPembayaran',
        'deskripsiperusahaan',
        'alamatperusahaan',
        'gambar',
        'title',
        'salary',
        'job_nature',
        'alamat_kantor',
        'min_pendidikan',
        'gender',
        'min_umur',
        'bataslamaran',
        'full_description',
        'short_description',
        'email',
        'notelp',
        'web',
    ];

    public function Pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'idPembayaran');
    }
}
