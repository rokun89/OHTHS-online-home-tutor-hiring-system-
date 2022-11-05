@extends('backend.master')

@section('content')


<form action="{{route('std_storepage')}}" method="post">
    @csrf

<div class="form-group">
    <label for="inputAddress2">Name</label>
    <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter your name here">
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
    <input name="contact" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your contact info here">
  </div>

  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    
    
    <div>
  <label for="">Select Status</label>
    <select name="status" id="" class="form-control">
  <option value="active">Active</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>
    
  </div>

  <button type="submit" class="btn btn-primary">submit</button>
</form>



@endsection