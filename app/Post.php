<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Category;
use App\Tag;


class Post extends Model
{

    use SoftDeletes;

    protected $fillable=['title', 'content', 'category_id', 'featured', 'slug'];
    
    protected $date = ['deleted_at'];
  

    //Acessors is used to get the full link of the image
    //The acessor intercepts the string stored in database and return the complete path

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
    

    //This is to show the relationship of a post to a category Many to One
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
