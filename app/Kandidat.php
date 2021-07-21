<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    public $table = 'kandidat';

    protected $fillable = [
        'nama',
        'skillUtama',
        'domisili',
        'idUser',
        'updated_at',
        'deleted_at',
    ];
}
