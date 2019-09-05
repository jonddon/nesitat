<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    //
    public function posts()
    {
       return $this->hasMany('App\Post');
    }
}
