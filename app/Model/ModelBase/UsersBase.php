<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class UsersBase extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }

    public function updatedBy(){
        return $this->belongsTo(UsersBase::class,'updated_by','id');
    }

    public function group(){
        return $this->belongsTo(GroupsBase::class);
    }
}
