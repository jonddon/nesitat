@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Create New Tag
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
            <form action="{{route('tag.store')}}" method="post">
            
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tag"> tag</label>
                    <input type="text" name="tag" id="tag" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>




            </form>
        </div>
    </div>

@endsection