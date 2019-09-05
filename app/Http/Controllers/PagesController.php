<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use App\Project;
use App\PostCategory;
use App\ProjectsController;
use App\PostsController;
use App\ProjectCagetoriesController;
use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model as Eloquent;

use Session;

class PagesController extends Controller
{
    //
    public function index(){

       
        return view('pages.index');
    }

    //Investors Pages
    public function dailytrend(){
        return view('pages.dailytrend');
    }

    public function generationAndDemand(){
        return view('pages.investors.generationAndDemand');
    }


    public function constraintAndLosses(){
        return view('pages.investors.constraintandlosses');
    }

    public function projects(){
        $projects = Project::paginate(6);

        return view('pages.investors.projects')->with('projects', $projects);
                                               
    }


    public function resources(){
        
        $factsheets = Resource::where('category_id', 1)->orderBy('id', 'desc')->paginate(2);
        $reports = Resource::where('category_id', 2)->orderBy('id', 'desc')->paginate(2);
        // dd($factsheets);
       return view('pages.resources')->with('factsheets', $factsheets)
                                     ->with('reports', $reports);

    }



    public function news(){
        $posts = Post::paginate(6);
        return view('pages.news')->with('posts', $posts);
        
    }


    public function operatorsandstakeholders(){
        return view('pages.operators-and-stakeholders');
    }
}
