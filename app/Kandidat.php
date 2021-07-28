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
        'idSkill',
        'domisili',
        'idUser',
        'status',
        'updated_at',
        'deleted_at',
    ];

    public function rekomendasi()
    {
        return $this->hasMany(Rekomendasi::class, 'idKandidat');
    }

    public function mainSkill()
    {
        return $this->belongsTo(MainSkill::class, 'idSkill');
    }
}
