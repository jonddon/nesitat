@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Category
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
            <form action="{{route('category.update', ['id'=> $category->id])}}" method="post">
            
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"> Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>




            </form>
        </div>
    </div>

@endsection