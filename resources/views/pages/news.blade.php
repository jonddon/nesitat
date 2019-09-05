@extends('layouts.pages')

@section('content')
    @if(count($posts)>0)
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div>
                    <img src="{{$post->featured}}" alt="{{$post->title}}" width="100%">
                </div>
                <h5>
                    <a href="{{route('post.single', ['id' => $post->id])}}">{{$project->title}}</a>  
                </h5>

            </div>
     
            @endforeach
        
        </div>
    </div>
    
    @else
    <p class="text-center">
        No Published News
    </p>


    @endif
    <div class="page-links">
            {{ $posts->links() }}
    </div>
    
@endsection