@extends('layouts.app')

@section('content')


<div class="card">

    <div class="card-header">
        Published Post
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Editing</th>
                <th>Deleting</th>
            </thead>
        
            <tbody>
                @if(count($posts)>0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px">
                            </td>
                            <td>
                                {{$post->title}}
                            </td>

                            <td>
                                <a href="{{route('post.edit', ['id'=> $post->id])}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            
                            <td>
                                <a href="{{route('post.delete', ['id'=> $post->id])}}" class="btn btn-danger btn-sm">Trash</a>
                            </td>
                        </tr>
                    @endforeach

                @else
                <tr colspan ="5">
                    <td>No Published Post</td>
                </tr>


                @endif

             
            </tbody>
        
        </table>
        
    </div>
</div>
    
@endsection