<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    //
    use SoftDeletes;

    protected $fillable=['title', 'content', 'category_id', 'slug'];
    
    protected $date = ['deleted_at'];

     //Acessors is used to get the full link of the image
    //The acessor intercepts the string stored in database and return the complete path

    public function getFileAttribute($file){
        return asset($file);
    }

    //This is to show the relationship of a project to a category Many to One
    public function category()
    {
        return $this->belongsTo('App\ProjectCategory');
    }
    
}
