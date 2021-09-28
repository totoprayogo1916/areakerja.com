<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    use HasFactory;

    public $table = 'role_user';

    public function User()
    {
        return $this->belongsToMany(Category::class);
    }
}
