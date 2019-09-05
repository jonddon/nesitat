@extends('layouts.app')

@section('content')


<div class="card">

    <div class="card-header">
        Published Projects
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
                @if(count($projects)>0)
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <img src="{{$project->featured}}" alt="{{$project->title}}" width="100px" height="50px">
                            </td>
                            <td>
                                {{$project->title}}
                            </td>

                            <td>
                                <a href="{{route('project.edit', ['id'=> $project->id])}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            
                            <td>
                                <a href="{{route('project.delete', ['id'=> $project->id])}}" class="btn btn-danger btn-sm">Trash</a>
                            </td>
                        </tr>
                    @endforeach

                @else
                <tr colspan ="5">
                    <td>No Published Project</td>
                </tr>


                @endif

             
            </tbody>
        
        </table>
        
    </div>
</div>
    
@endsection