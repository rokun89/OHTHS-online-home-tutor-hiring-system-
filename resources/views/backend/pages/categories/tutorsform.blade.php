@extends('backend.master')

@section('content')



<form action="{{route('tutor.store.page')}}" method="post">

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
    <div class="form-group col-md-6">
    <label for="inputAddress2">Contact</label>
    <input name="phone" type="number" class="form-control" id="inputAddress2" placeholder="Enter Your Contact Info">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">N-ID</label>
    <input name="n_id" type="number" class="form-control" id="inputAddress2" placeholder="Your n-id">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Subject</label>
    <input name="subject" type="text" class="form-control" id="inputAddress2" placeholder="Enter your subject">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Salary</label>
    <input name="salary" type="number" class="form-control" id="inputAddress2" placeholder="$">
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div>
    <label for="">Enter description</label>
    <input type="text"  class="form-control" name="description" id="" cols="" rows="" placeholder="Enter Description"></textarea>
  </div>

  <div>
    <label for="">Occupation</label>
    <input type="text"  class="form-control" name="occupation" id="" cols="" rows="" placeholder="Enter Occupation"></textarea>
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option value="active">Active</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>
    </div>
  
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>




@endsection