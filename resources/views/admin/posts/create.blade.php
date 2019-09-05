@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create New Post
        </div>
        <div class="card-body">
            @if(count($errors)>0)
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{$error}}
                        </li>
                        
                    @endforeach
                </ul>

            @endif
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured"> Featured</label>
                    <input type="file" name="featured" id="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select category</label>
                    <select name="category_id" id="category_id" class="form-control">

                        @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <label for="tags">Select Tags</label>
                @foreach ($tags as $tag)
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}"> {{$tag->tag}}
                        </label>
                    </div>
                @endforeach
                   
                

                <div class="form-group">
                    <label for="content"> Content</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create Post</button>
                </div>




            </form>
        </div>
    </div>

@endsection