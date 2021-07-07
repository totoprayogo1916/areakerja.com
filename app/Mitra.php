<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    public $table = 'mitra';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'deskripsi',
        'alamat',
        'no',
        'logo',
        'koin',
    ];
}
