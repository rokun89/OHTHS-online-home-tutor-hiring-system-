@extends('backend.master')

@section('content')

<h2 style="margin-bottom: 2%;"> <u> <b> Class Form </b> </u> </h2>

<form action="{{route('cls_storepage')}}" method="post">


  @csrf

  <div class="row">
    <div class="form-col col-md-6">
    <label for="inputAddress2">Name</label>
    <input required name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here">
    </div>
  </div>
    <div style="margin-top: 1%;">
      <button type="submit" class="btn btn-primary">submit</button>
    </div>
  
</form>





@endsection