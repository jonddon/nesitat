<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResourceCategory extends Model
{
    //
    public function resources()
    {
       return $this->hasMany('App\Resource');
    }

}
