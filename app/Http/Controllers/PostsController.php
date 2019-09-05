<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        
        $categories = Category::all();
        if($categories->count() == 0 )
        {
            Session::flash('info', 'Create a Category before creating post');
            return redirect()->back();
        }


        return view('admin.posts.create')->with('categories', $categories)->with('tags', Tag::all());
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
        
        $featured_new_image = time().$featured->getClientOriginalName();

        $featured->move('uploads/posts/', $featured_new_image);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'uploads/posts/'.$featured_new_image,
            'category_id' => $request->category_id,
            'slug'=> str_slug($request->title) //Convert title to slug
            
        ]);

        //Access the tags relationship with the post (Mant to Many ) and attach the tags to the post
        $post->tags()->attach($request->tags);

        Session::flash('success', 'Post was Succcessfully created');
        
        $post->save();
        return redirect()->back();
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
        $post= Post::find($id);
        return view('admin.posts.edit')->with('post',$post)
                                        ->with('categories', Category::all())
                                        ->with('tags', Tag::all());
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

        $post = Post::find($id);
        //Check if there is a new featured image
        if($request->hasFile('featured')){
            $featured = $request->featured;
            
            $featured_new_image = time().$featured->getClientOriginalName();

            $featured->move('uploads/posts/', $featured_new_image);

            $post->featured ='uploads/posts/'.$featured_new_image;
        }
           

        $post->title = $request->title;
        $post->content =$request->content;
        $post->category->id = $request->category_id;
        
        $post->save();

        //Delete the tags from the Database and put the new tags in the database
        $post->tags()->sync($request->tags);

        Session::flash('success', 'Post was Succcessfully Updated');
      
        return redirect()->route('posts');

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
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }


    public function trashed()
    {
        //
        $posts = Post::onlyTrashed()->get();
        return view('admin.posts.trashed')->with('posts', $posts);
    }

    //Permanent Delete
    public function kill($id){

        //look for post + trashed where id = id 
        //get() returns a collection so we use first() to get the post model
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->forceDelete();

        Session::flash('success', 'Post Permanently Deleted');

        return redirect()->back();
    }

    public function restore($id){

        //look for post + trashed where id = id 
        //get() returns a collection so we use first() to get the post model
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success', 'Post Restored');

        return redirect()->route('posts');
    }
}
