<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class MenuBase extends Model
{
    protected $table = 'menu';

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }

    public function updatedBy(){
        return $this->belongsTo(UsersBase::class,'updated_by','id');
    }
}
