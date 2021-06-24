<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lowongan extends Model
{
    use SoftDeletes;

    public $table = 'lowongan';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'namaperusahaan',
        'deskripsiperusahaan',
        'alamatperusahaan',
        'gambar',
        'title',
        'salary',
        'job_nature',
        'bataslamaran',
        'full_description',
        'short_description',
        'email',
        'notelp',
        'web',
    ];
}
