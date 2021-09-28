<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $table       = 'article';
    protected $fillable = ['judul', 'ringkasan', 'content', 'gambar', 'slug'];
}
