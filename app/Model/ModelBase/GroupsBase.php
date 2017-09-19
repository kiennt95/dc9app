<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class GroupsBase extends Model
{
    protected $table = 'groups';

    public function users(){
        return $this->hasMany(UsersBase::class);
    }


    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }
}
