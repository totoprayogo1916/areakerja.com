<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    public $table = 'kandidat';

    protected $fillable = [
        'username',
        'skillUtama',
        'domisili',
        'updated_at',
        'deleted_at',
    ];
}
