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
                  
                  <h4><a href="#"><u>Tution Data Table</u> </a></h4>

                  <p> <label for="Name">Title:</label>
                  <input value="{{$viewTution->title}}"></p>

                  <p> <label for="Name">Name:</label>
                  <input value="{{$viewTution->tutor_id}}"></p>

                  <p> <label for="Name">Subject:</label>
                  <input value="{{$viewTution->subject_id}}"></p>

                  <p> <label for="Name">Class:</label>
                  <input value="{{$viewTution->class_id}}"></p>


                  <p> <label for="Name">Salary:</label>
                  <input value="{{$viewTution->salary}}"></p>

                  <p> <label for="Name">Weekend Days:</label>
                  <input value="{{$viewTution->weekend_days}}"></p>



                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">

                    <a href="{{route('tution-url')}}">
                        <span class="btn btn-primary"> Go to Back</span>
                    </a>

                </div>
                <div class="space-ten"></div>
                  
                </div>
                
              </div>
            </div>



@endsection