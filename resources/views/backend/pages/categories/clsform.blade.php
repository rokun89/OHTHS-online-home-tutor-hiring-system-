@extends('backend.master')

@section('content')


<form action="{{route('cls_storepage')}}" method="post">


  @csrf

  <div class="form-group ">
    <div class="form-col col-md-6"></div>
    <label for="inputAddress2">Name</label>
    <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here">
  </div>
<div>
  <button type="submit" class="btn btn-primary">submit</button>
</div>
</form>





@endsection