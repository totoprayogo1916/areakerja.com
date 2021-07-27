<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainSkill extends Model
{
    use HasFactory;

    public $table = 'mainSkill';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
    ];


    public function kandidat()
    {
        return $this->hasMany(Kandidat::class, 'idSkill');
    }
}
