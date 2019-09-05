@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        Trashed Resources
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Destroy</th>
            </thead>
        
            <tbody>
                @if(count($resources)>0)
                    @foreach ($resources as $resource)
                        <tr>
                            <td>
                                <img src="{{$resource->featured}}" alt="{{$resource->title}}" width="100px" height="50px">
                            </td>
                            <td>
                                {{$resource->title}}
                            </td>

                            <td>
                                <a href="{{route('resource.edit', ['id'=> $resource->id])}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            
                            <td>
                                <a href="{{route('resource.restore', ['id'=> $resource->id])}}" class="btn btn-success btn-sm">Restore</a>
                            </td>
                            <td>
                                <a href="{{route('resource.kill', ['id'=> $resource->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                @else
                    <tr colspan="5" class="text-center">
                        <td colspan ="5" class="text-center">No Trashed Resources</td>
                    </tr>
                @endif
                
            </tbody>
        
        </table>
        
    </div>
</div>
    
@endsection