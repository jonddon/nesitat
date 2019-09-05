@extends('layouts.pages')

@section('content')
    @if(count($projects)>0)
    <div class="container">
        <h3>
            Projects and Milestones
        </h3>
        <p>
            Comprehensive Reports and Publications from NESISTAS Projects and Partners
        </p>
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div>
                    <img src="{{$project->featured}}" alt="{{$project->title}}" width="100%">
                </div>
                <h5>
                <a href="{{route('project.single', ['id' => $project->id])}}">{{$project->title}}</a>  
                </h5>

            </div>
     
            @endforeach
        
        </div>
    </div>
    
    @else
    <p class="text-center">
        No Published project
    </p>


    @endif
    <div class="page-links">
            {{ $projects->links() }}
    </div>
    
@endsection