<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class UsersBase extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function group(){
        return $this->belongsTo(GroupsBase::class);
    }
}
