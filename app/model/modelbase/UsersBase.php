<?php

namespace App\model\modelbase;

use Illuminate\Database\Eloquent\Model;

class UsersBase extends Model
{
    protected $fillable = [
        'name', 'email', 'password'
    ];
}
