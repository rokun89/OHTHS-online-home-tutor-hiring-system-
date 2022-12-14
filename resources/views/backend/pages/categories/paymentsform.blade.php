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
      <label for="inputPassword4">Contact</label>
      <input required name="contact" type="number" class="form-control"  placeholder="contact">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Amount</label>
      <input required name="amount" type="number" class="form-control" placeholder="BDT">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Dew</label>
      <input required name="dew" type="number" class="form-control"  placeholder="BDT">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Date</label>
      <input required name="date" type="date" class="form-control" id="input date" placeholder="date">
    </div>

    <div class="form-group col-md-2">
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option value="pending">pending</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection