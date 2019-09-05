<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/resources', 'PagesController@resources');
Route::get('/projects', 'PagesController@projects');
Route::get('/operators-and-stakeholders','PagesController@operatorsandstakeholders');

Route::get('/project/show/{id}', [
    'uses'=> 'ProjectsController@show',
    'as'=> 'project.single'
]);

Route::get('/post/show/{id}', [
    'uses'=> 'PostsController@show',
    'as'=> 'post.single'
]);



Route::get('/news', 'PagesController@news');



 //Pages Routes
 Route::group(['prefix'=> 'investors'] , function(){

    Route::get('/dailytrend', [
        'uses'=> 'PagesController@dailytrend',
        'as'=> 'investors.dailytrend'
    ]);
    
    Route::get('/generationanddemand',[
        'uses'=> 'PagesController@generationanddemand',
        'as'=> 'investors.generationanddemand'
    ]);

    Route::get('/constraintandlosses',[
        'uses'=> 'PagesController@constraintandlosses',
        'as'=> 'investors.constraintandlosses'
    ]);


    Route::get('/projects',[
        'uses'=> 'PagesController@projects',
        'as'=> 'investors.projects'
    ]);



 });
 







Auth::routes();



Route::group(['prefix'=> 'admin', 'middleware'=>'auth'],function(){
    Route::get('/home', [
        'uses'=>'HomeController@index',
        'as'=> 'home'
    ]);

    //Category Route

    Route::get('/category/create',[
        'uses'=> 'CategoriesController@create',
        'as'=> 'category.create'
    ]);

    Route::post('/category/store',[
        'uses'=> 'CategoriesController@store',
        'as'=> 'category.store'
    ]);

    Route::get('/categories',[
        'uses'=> 'CategoriesController@index',
        'as'=> 'categories'
    ]);


    Route::get('/category/edit/{id}',[
        'uses'=> 'CategoriesController@edit',
        'as'=> 'category.edit'
    ]);

    Route::post('/category/update/{id}',[
        'uses'=> 'CategoriesController@update',
        'as'=> 'category.update'
    ]);

    Route::get('/category/delete/{id}',[
        'uses'=> 'CategoriesController@destroy',
        'as'=> 'category.delete'
    ]);

    //Post Routes
    
    Route::get('/post/create',[
        'uses'=> 'PostsController@create',
        'as'=> 'post.create'
    ]);

    Route::get('/post/edit/{id}',[
        'uses'=> 'PostsController@edit',
        'as'=> 'post.edit'
    ]);

    Route::get('/post/delete/{id}',[
        'uses'=> 'PostsController@destroy',
        'as'=> 'post.delete'
    ]);

    Route::get('/post/restore/{id}',[
        'uses'=> 'PostsController@restore',
        'as'=> 'post.restore'
    ]);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    
    Route::post('/post/store',[
        'uses'=> 'PostsController@store',
        'as'=> 'post.store'
    ]);

    Route::post('/post/update/{id}',[
        'uses'=> 'PostsController@update',
        'as'=> 'post.update'
    ]);

    Route::get('/posts',[
        'uses'=> 'PostsController@index',
        'as'=> 'posts'
    ]);

    Route::get('/posts/trashed',[
        'uses'=> 'PostsController@trashed',
        'as'=> 'post.trashed'
    ]);


    //Permanent delete

    Route::get('/posts/kill/{id}',[
        'uses'=> 'PostsController@kill',
        'as'=> 'post.kill'
    ]);



     //Projects Routes
    
     Route::get('/project/create',[
        'uses'=> 'ProjectsController@create',
        'as'=> 'project.create'
    ]);

    Route::get('/project/edit/{id}',[
        'uses'=> 'ProjectsController@edit',
        'as'=> 'project.edit'
    ]);

    Route::get('/project/delete/{id}',[
        'uses'=> 'ProjectsController@destroy',
        'as'=> 'project.delete'
    ]);

    Route::get('/project/restore/{id}',[
        'uses'=> 'ProjectsController@restore',
        'as'=> 'project.restore'
    ]);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    
    Route::post('/project/store',[
        'uses'=> 'ProjectsController@store',
        'as'=> 'project.store'
    ]);

    Route::post('/project/update/{id}',[
        'uses'=> 'ProjectsController@update',
        'as'=> 'project.update'
    ]);

    Route::get('/projects',[
        'uses'=> 'ProjectsController@index',
        'as'=> 'projects'
    ]);

    Route::get('/projects/trashed',[
        'uses'=> 'ProjectsController@trashed',
        'as'=> 'project.trashed'
    ]);


    //Permanent delete

    Route::get('/projects/kill/{id}',[
        'uses'=> 'ProjectsController@kill',
        'as'=> 'project.kill'
    ]);


    //Project Category 


    Route::get('/project/category/create',[
        'uses'=> 'ProjectCategoriesController@create',
        'as'=> 'project.category.create'
    ]);

    Route::post('/project/category/store',[
        'uses'=> 'ProjectCategoriesController@store',
        'as'=> 'project.category.store'
    ]);

    Route::get('/project/categories',[
        'uses'=> 'ProjectCategoriesController@index',
        'as'=> 'project.categories'
    ]);


    Route::get('/project/category/edit/{id}',[
        'uses'=> 'ProjectCategoriesController@edit',
        'as'=> 'project.category.edit'
    ]);

    Route::post('/project/category/update/{id}',[
        'uses'=> 'ProjectCategoriesController@update',
        'as'=> 'project.category.update'
    ]);

    Route::get('/project/category/delete/{id}',[
        'uses'=> 'ProjectCategoriesController@destroy',
        'as'=> 'project.category.delete'
    ]);


    
     //Resources Routes
    
     Route::get('/resource/create',[
        'uses'=> 'ResourcesController@create',
        'as'=> 'resource.create'
    ]);

    Route::get('/resource/edit/{id}',[
        'uses'=> 'ResourcesController@edit',
        'as'=> 'resource.edit'
    ]);

    Route::get('/resource/delete/{id}',[
        'uses'=> 'ResourcesController@destroy',
        'as'=> 'resource.delete'
    ]);

    Route::get('/resource/restore/{id}',[
        'uses'=> 'ResourcesController@restore',
        'as'=> 'resource.restore'
    ]);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    
    Route::post('/resource/store',[
        'uses'=> 'ResourcesController@store',
        'as'=> 'resource.store'
    ]);

    Route::post('/resource/update/{id}',[
        'uses'=> 'ResourcesController@update',
        'as'=> 'resource.update'
    ]);

    Route::get('/resources',[
        'uses'=> 'ResourcesController@index',
        'as'=> 'resources'
    ]);

    Route::get('/resources/trashed',[
        'uses'=> 'ResourcesController@trashed',
        'as'=> 'resource.trashed'
    ]);


    //Permanent delete

    Route::get('/resources/kill/{id}',[
        'uses'=> 'ResourcesController@kill',
        'as'=> 'resource.kill'
    ]);


    //Resources Category 


    Route::get('/resource/category/create',[
        'uses'=> 'ResourceCategoriesController@create',
        'as'=> 'resource.category.create'
    ]);

    Route::post('/resource/category/store',[
        'uses'=> 'ResourceCategoriesController@store',
        'as'=> 'resource.category.store'
    ]);

    Route::get('/resource/categories',[
        'uses'=> 'ResourceCategoriesController@index',
        'as'=> 'resource.categories'
    ]);


    Route::get('/resource/category/edit/{id}',[
        'uses'=> 'ResourceCategoriesController@edit',
        'as'=> 'resource.category.edit'
    ]);

    Route::post('/resource/category/update/{id}',[
        'uses'=> 'ResourceCategoriesController@update',
        'as'=> 'resource.category.update'
    ]);

    Route::get('/resource/category/delete/{id}',[
        'uses'=> 'ResourceCategoriesController@destroy',
        'as'=> 'resource.category.delete'
    ]);





    //Tags

    Route::get('/tag/create',[
        'uses'=> 'TagsController@create',
        'as'=> 'tag.create'
    ]);

    Route::post('/tag/store',[
        'uses'=> 'TagsController@store',
        'as'=> 'tag.store'
    ]);

    Route::get('/tags',[
        'uses'=> 'TagsController@index',
        'as'=> 'tags'
    ]);


    Route::get('/tag/edit/{id}',[
        'uses'=> 'TagsController@edit',
        'as'=> 'tag.edit'
    ]);

    Route::post('/tag/update/{id}',[
        'uses'=> 'TagsController@update',
        'as'=> 'tag.update'
    ]);

    Route::get('/tag/delete/{id}',[
        'uses'=> 'TagsController@destroy',
        'as'=> 'tag.delete'
    ]);

});


