<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class VoteBase extends Model
{
    protected $table = 'vote';

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }


    public function voteBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }

    public function voteForUser(){
        return $this->belongsTo(UsersBase::class,'user_id','id');
    }

}
