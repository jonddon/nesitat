@extends('layouts.app')

@section('content')


<div class="card">

    <div class="card-header">
        Published Resources
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
                                <a href="{{route('resource.delete', ['id'=> $resource->id])}}" class="btn btn-danger btn-sm">Trash</a>
                            </td>
                        </tr>
                    @endforeach

                @else
                <tr colspan ="5">
                    <td>No Published Resource</td>
                </tr>


                @endif

             
            </tbody>
        
        </table>
        
    </div>
</div>
    
@endsection