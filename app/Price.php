<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public $table = 'price';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public $casts = [
        'list' => 'array',
    ];

    protected $fillable = [
        'name',
        'deskripsi_singkat',
        'deskripsi_full',
        'list',
        'harga',
        'warna',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
