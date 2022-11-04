@extends('backend.master')

@section('content')

<form action="{{route('category.store')}}" method="post">
    @csrf

<div class="form-group">
    <label for="inputAddress2">Name</label>
    <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group">
    <label for="inputAddress2">Contact</label>
    <input name="contact" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your contact Here">
  </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  
  <div class="form-group">
    <label for="inputAddress2">n-id</label>
    <input name="n_id" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your n-id Here">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input name="city" type="text" class="form-control" id="inputCity">
    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input name="check me out" class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>



@endsection