<?php

namespace App\Model\Modelbase;

use Illuminate\Database\Eloquent\Model;

class LocationsBase extends Model
{
    protected $table = 'locations';

    public function createdBy(){
        return $this->belongsTo(UsersBase::class,'created_by','id');
    }
}
