<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class OrderDetailBase extends Model
{
    protected $table = 'order_detail';

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }

    public function updatedBy(){
        return $this->belongsTo(UsersBase::class,'updated_by','id');
    }

    public function user(){
        return $this->belongsTo(UsersBase::class,'user_id','id');
    }
}
