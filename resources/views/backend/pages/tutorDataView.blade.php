@extends('backend.master')

@section('content')


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
        <div class="col-md-4">
              <div class="thumbnail" style="background-color: aliceblue";>
              <div class="caption">
                  
                  <h4><a href="#"><u>Tutors Table Data</u> </a></h4>
                  <p> <img width="60px" src="{{url('/uploads/'.$viewtutorTest->images)}}" alt="">
                </p>

                <!--<img src="{{$viewtutorTest->images}}" alt="£" class="img-responsive"> -->
               
                  <p> <label for="Name">Name:</label>
                  <input value="{{$viewtutorTest->name}}"></p>

                  <p> <label for="Name">Email:</label>
                  <input value="{{$viewtutorTest->email}}"></p>

                  <p> <label for="Name">Contact:</label>
                  <input value="{{$viewtutorTest->contact}}"></p>

                  <p> <label for="Name">N-ID:</label>
                  <input value="{{$viewtutorTest->n_id}}"></p>

                  <p> <label for="Name">Subject:</label>
                  <input value="{{$viewtutorTest->subject}}"></p>

                  <p> <label for="Name">Salary:</label>
                  <input value="{{$viewtutorTest->salary}}"></p>

                  <p> <label for="Name">Address:</label>
                  <input value="{{$viewtutorTest->address}}"></p>

                  <p> <label for="Name">Status:</label>
                  <input value="{{$viewtutorTest->status}}"></p>


                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">

                    <a href="{{route('tutor-url')}}">
                        <span class="btn btn-primary"> Go to Back</span>
                    </a>

                </div>
                <div class="space-ten"></div>
                  
                </div>
                
              </div>
            </div>





@endsection