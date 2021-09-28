<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    public $table = 'riwayatpendidikan';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_instansi',
        'gelar',
        'tahun',
        'idKandidat',
    ];
}
