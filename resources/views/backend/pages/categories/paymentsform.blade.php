@extends('backend.master')

@section('content')


<form action="{{route('payments.store.page')}}" method="post">

  @csrf  
<div class="form-group">
    <label for="inputAddress2">Name</label>
    <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter your Name Here">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact</label>
      <input name="contact" type="password" class="form-control" id="inputPassword4" placeholder="contact">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Date</label>
      <input name="date" type="date" class="form-control" id="input date" placeholder="date">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Amount</label>
      <input name="amount" type="text" class="form-control" id="input Amount" placeholder="$$$">
    </div>

   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection