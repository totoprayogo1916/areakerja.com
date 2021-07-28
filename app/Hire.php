<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    use HasFactory;

    public $table = 'hires';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'idMitra',
        'idKandidat',
    ];

    public function kandidat()
    {
        return $this->belongsTo(Kandidat::class, 'idKandidat');
    }
}
