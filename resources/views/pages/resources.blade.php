@extends('layouts.pages')

@section('content')

    {{-- FactSheet Segment --}}
    @if(count($factsheets)>0)
    <div class="container">
            <h3>
                Factsheets
            </h3>
            <p>
                These Factsheets and infographics provide key statistics on the Nigerian Electricity industry
            </p>
        <div class="row">
            @foreach ($factsheets as $factsheet)
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{$factsheet->featured}}" alt="{{$factsheet->title}}" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" style="align-self: flex-end;">
                        <h5>
                            {{$factsheet->title}}
                        </h5>
                        <p> 
                            {{$factsheet->description}}
                        </p>
                        <a href="{{$factsheet->file}}" download class="btn btn-success" id="download-btn">Download</a>
            
                    </div>
                </div>
               
               
            </div>
            
     
            @endforeach

            
        </div>
        <div class="page-links">
                {{ $factsheets->links() }}
        </div>
    </div>
    
    @else
    <p class="text-center">
        No Published project
    </p>


    @endif

    <hr style="margin:30px 10px">

    {{-- Report Segments --}}

    @if(count($reports)>0)
    <div class="container">
        <h3>
            Reports
        </h3>
        <p>
            These Factsheets and infographics provide key statistics on the Nigerian Electricity industry
        </p>
        <div class="row">
               
            @foreach ($reports as $report)
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{$report->featured}}" alt="{{$report->title}}" width="100%">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" style="align-self: flex-end;">
                        <h5>
                            {{$report->title}}
                        </h5>
                        <p> 
                            {{$report->description}}
                        </p>
                        <a href="{{$report->file}}" download class="btn btn-success" id="download-btn">Download</a>
            
                    </div>
                </div>
               
               
            </div>
            
     
            @endforeach

            
        </div>
        <div class="page-links">
                {{ $factsheets->links() }}
        </div>
    </div>
    
    @else
    <p class="text-center">
        No Published project
    </p>


    @endif

    
@endsection