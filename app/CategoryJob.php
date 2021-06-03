<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryJob extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'category_job';

}
