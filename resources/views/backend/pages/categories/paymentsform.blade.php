@extends('backend.master')

@section('content')


<form action="{{route('payments.store.page')}}" method="post">

  @csrf  
<div class="form-group">
    <label for="inputAddress2">Name</label>
    <input required name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter your Name Here">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input required name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact</label>
      <input required name="contact" type="password" class="form-control" id="inputPassword4" placeholder="contact">
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
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date</label>
      <input required name="date" type="date" class="form-control" id="input date" placeholder="date">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Amount</label>
      <input required name="amount" type="text" class="form-control" id="input Amount" placeholder="$$$">
    </div>

    <div class="form-group col-md-2">
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option value="active">Active</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection