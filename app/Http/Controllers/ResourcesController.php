<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resource;
use App\ResourceCategory;
use Session;
use App\SoftDeletes;


class ResourcesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.resources.index')->with('resources', Resource::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = ResourceCategory::all();
        if($categories->count() == 0 )
        {
            Session::flash('info', 'Create a Category before creating resource');
            return redirect()->back();
        }


        return view('admin.resources.create')->with('categories', $categories);
   

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
            'file'=>  'required',
            'description' => 'required',
            'category_id'=> 'required'
        ]);

        

        $featured = $request->featured;
        $file = $request->file;

        $file_new_doc = time().$file->getClientOriginalName();
        $featured_new_image = time().$featured->getClientOriginalName();

        $featured->move('uploads/resource/images', $featured_new_image);
        $file->move('uploads/resource/document', $file_new_doc);


        
        

        $resource = Resource::create([
            'title' => $request->title,
            'description' => $request->description,
            'featured' => '/uploads/resource/images/'.$featured_new_image,
            'file' => '/uploads/resource/documents/'.$file_new_doc,
            'category_id' => $request->category_id,
            'slug'=> str_slug($request->title) //Convert title to slug
            
        ]);

        $resource->save();
        
        
        

        Session::flash('success', 'resource was Succcessfully created');
        
        
        return redirect()->route('resources');
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
        $resource= Resource::find($id);
        return view('admin.resources.edit')->with('resource',$resource)
                                        ->with('categories', ResourceCategory::all());
                                        
   
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
            'description' => 'required',
            'category_id'=> 'required'
        ]);

        $resource = Resource::find($id);
        //Check if there is a new featured image
        if($request->hasFile('featured')){
            $featured = $request->featured;
            
            $featured_new_image = time().$featured->getClientOriginalName();

            $featured->move('uploads/resource/', $featured_new_image);

            $resource->featured ='uploads/resource/'.$featured_new_image;
        }

        if($request->hasFile('file')){
            $file = $request->file;
            
            $file_new = time().$file->getClientOriginalName();

            $file->move('uploads/resource/', $file_new);

            $resource->file ='uploads/resource/'.$file_new;
        }
           

        $resource->title = $request->title;
        $resource->description =$request->description;
        $resource->category->id = $request->category_id;
        
        $resource->save();


        Session::flash('success', 'resource was Succcessfully Updated');
      
        return redirect()->route('resources');
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
         $resource = Resource::find($id);
         $resource->delete();
         return redirect()->back();

    }

    public function trashed()
    {
        //
        $resource = Resource::onlyTrashed()->get();
        return view('admin.resources.trashed')->with('resource', $resource);
    }

    //Permanent Delete
    public function kill($id){

        //look for resource + trashed where id = id 
        //get() returns a collection so we use first() to get the resource model
        $resource = Resource::withTrashed()->where('id', $id)->first();

        $resource->forceDelete();

        Session::flash('success', 'resource Permanently Deleted');

        return redirect()->back();
    }

    public function restore($id){

        //look for resource + trashed where id = id 
        //get() returns a collection so we use first() to get the resource model
        $resource = Resource::withTrashed()->where('id', $id)->first();

        $resource->restore();

        Session::flash('success', 'Resource Restored');

        return redirect()->route('resources');
    }

}
