@extends('layouts.pages')

@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <img src="{{$project->featured}}" alt="{{$project->title}}" srcset="" width="100%">
               
                </div>
                
               
            </div>
            
     
           <div class="col-lg-6">
               <h2>
                    {{$project->title}}
               </h2>
               <hr>
               <div class="content">
                   {!!$project->content!!}
               </div>
           </div>

            
        </div>
    </div>

    
@endsection