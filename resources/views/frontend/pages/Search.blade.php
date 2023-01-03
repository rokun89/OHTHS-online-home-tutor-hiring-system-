@extends('frontend.master')

@section('content')

<div style="padding-top: 60px;">

    <style>
          .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

 <div class="container">
    <div class="row">
    @if($search->count()>0)
        @foreach($search as $result)
            <div class="col-md-4">
              <div class="thumbnail" style="background-color: #D4EFDF";>
              <div class="caption">
                  
                  <h4><a href="#"><u>Tuition Details</u> </a></h4>

                
                  <p> <label for="Name">Tutor-Name:</label>
                  {{$result->tutor->name}}</p>

                  <p> <label for="Name">Subject:</label>
                  {{$result->subject->name}}</p>

                  <p> <label for="Name">Class:</label>
                  {{$result->class->name}}</p>

                  <p> <label for="Name">Salary:</label>
                  {{$result->salary}}</p>

                  <p> <label for="Name">Weekend-Days:</label>
                  {{$result->weekend_days}}</p>

                  <p> <label for="Name">Title:</label>
                  {{$result->title}}</p>                  


                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="{{route('tution.hire',$result->id)}}">
                        <span class="btn btn-success">Hire</span>
                    </a>
                    
                </div>
                <div class="space-ten"></div>
                  
                </div>
                
              </div>
        @endforeach 
     @else
        <p class="alert alert-danger">No Subject Found.</p>
             
            </div>
    @endif
          


    </div>




</div>
@endsection