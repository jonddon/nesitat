<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectCategory;
use Session;
use App\SoftDeletes;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.projects.index')->with('projects', Project::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ProjectCategory::all();
        if($categories->count() == 0 )
        {
            Session::flash('info', 'Create a Category before creating project');
            return redirect()->back();
        }


        return view('admin.projects.create')->with('categories', $categories);
   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->all());
         $this->validate($request,[
            'title'=> 'required|max:255',
            'featured'=> 'required|image',
            
            'content' => 'required',
            'category_id'=> 'required'
        ]);

        

        $featured = $request->featured;
        $file = $request->file;

        $file_new_doc = time().$file->getClientOriginalName();
        $featured_new_image = time().$featured->getClientOriginalName();

        $featured->move('uploads/project/images', $featured_new_image);
        


        $project = Project::create([
            'title' => $request->title,
            'content' => $content,
            'featured' => '/uploads/project/images/'.$featured_new_image,
             'category_id' => $request->category_id,
            'slug'=> str_slug($request->title) //Convert title to slug
            
        ]);

        $project->save();
        
        
        

        Session::flash('success', 'Project was Succcessfully created');
        
        
        return redirect()->route('projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project= Project::find($id);
        return view('pages.single-project')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project= Project::find($id);
        return view('admin.projects.edit')->with('project',$project)
                                        ->with('categories', ProjectCategory::all());
                                        
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request,[
            'title'=> 'required|max:255',
            'content' => 'required',
            'category_id'=> 'required'
        ]);

        $project = Project::find($id);
        //Check if there is a new featured image
        if($request->hasFile('featured')){
            $featured = $request->featured;
            
            $featured_new_image = time().$featured->getClientOriginalName();

            $featured->move('uploads/project/', $featured_new_image);

            $project->featured ='/uploads/project/'.$featured_new_image;
        }
           

        $project->title = $request->title;
        $project->content =$request->content;
        $project->category->id = $request->category_id;
        
        $project->save();

       

        Session::flash('success', 'Project was Succcessfully Updated');
      
        return redirect()->route('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //
         $project = Project::find($id);
         $project->delete();
         return redirect()->back();

    }

    public function trashed()
    {
        //
        $project = Project::onlyTrashed()->get();
        return view('admin.projects.trashed')->with('project', $project);
    }

    //Permanent Delete
    public function kill($id){

        //look for project + trashed where id = id 
        //get() returns a collection so we use first() to get the project model
        $project = Project::withTrashed()->where('id', $id)->first();

        $project->forceDelete();

        Session::flash('success', 'Project Permanently Deleted');

        return redirect()->back();
    }

    public function restore($id){

        //look for project + trashed where id = id 
        //get() returns a collection so we use first() to get the project model
        $project = Project::withTrashed()->where('id', $id)->first();

        $project->restore();

        Session::flash('success', 'Project Restored');

        return redirect()->route('projects');
    }
}
