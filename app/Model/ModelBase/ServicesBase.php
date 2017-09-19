<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class ServicesBase extends Model
{
    protected $table = 'services';

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }
}
