<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    public $table = 'Riwayat';

    protected $fillable = [
        'ip'
    ];

    public function Job()
    {
        return $this->belongsTo(Job::class, 'idJob', 'id');
    }
}
