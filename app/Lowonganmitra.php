<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowonganmitra extends Model
{
    use HasFactory;
    public $table = 'lowonganmitra';

    protected $fillable = [
        'posisi',
        'status_pekerjaan',
        'deskripsi_pekerjaan',
        'syarat_pekerjaan',
        'alamat_kantor',
        'min_pendidikan',
        'gender',
        'min_umur',
        'bataslamaran',
        'gaji',
        'email',
        'status_pemasangan',
        'idUser',
    ];
}
