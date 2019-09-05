<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResourceCategory;
use Session;

class ResourceCategoriesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.resources.categories.index')->with('categories', resourceCategory::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.resources.categories.create');
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
          
        $this->validate($request,[
            'name'=> 'required',
            
        ]);

        $category = new ResourceCategory();

        $category->name = $request->name;
        
        $category->save();

        Session::flash('success', 'Category was created');
        return redirect()->route('resource.categories');


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
        $category= ResourceCategory::find($id);
        return view('admin.resources.categories.edit')->with('category',$category);
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
        $category= ResourceCategory::find($id);
            
        $this->validate($request,[
            'name'=> 'required'
            
        ]);

        $category->name = $request->name;
        
        $category->save();

        Session::flash('success', 'Category was updated');

        return redirect()->route('resource.categories');
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
        $category= ResourceCategory::find($id);
        $category->delete();

        Session::flash('success', 'Category was deleted');
        return redirect()->route('resource.categories');
    }
}
