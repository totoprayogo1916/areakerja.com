<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra_Kandidat extends Model
{
    use HasFactory;

    public $table = 'mitraToKandidat';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'idMitra',
        'idKandidat',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'idMitra');
    }
}
