<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'pembayaran';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'paket',
        'harga',
        'status',
    ];

    public function Lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'idPembayaran', 'id');
    }
}
