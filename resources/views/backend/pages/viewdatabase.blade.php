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
              <div class="thumbnail" style="background-color: whitesmoke";>
              <div class="caption">
                  
                  <h4><a href="#"><u>Parents Table Data</u> </a></h4>
                  <p> <label for="file">Images:</label>
                   "{{$viewstdTest->images}}"</p>

                <!--<img src="{{$viewstdTest->images}}" alt="£" class="img-responsive"> -->
               
                  <p> <label for="Name">Name:</label>
                  <input value="{{$viewstdTest->name}}"></p>

                  <p> <label for="Name">Email:</label>
                  <input value="{{$viewstdTest->email}}"></p>

                  <p> <label for="Name">Contact:</label>
                  <input value="{{$viewstdTest->contact}}"></p>

                  <p> <label for="Name">Address:</label>
                  <input value="{{$viewstdTest->address}}"></p>

                  <p> <label for="Name">Status:</label>
                  <input value="{{$viewstdTest->status}}"></p>


                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Go to Back</button>
                    
                </div>
                <div class="space-ten"></div>
                  
                </div>
                
              </div>
            </div>
            


@endsection