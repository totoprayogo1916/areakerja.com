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
        'pendidikan',
        'gender',
        'umur',
        'bataslamaran',
        'created_at',
        'updated_at',
        'deleted_at',
        'location_id',
        'requirements',
        'full_description',
        'short_description',
        'email',
        'notelp',
        'web'
    ];

    
}