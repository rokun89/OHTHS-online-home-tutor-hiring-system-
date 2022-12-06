@extends('backend.master')

@section('content')


<form>

<div class="form-group">
    <input required type="text"  class="form-control" name="title" id="" cols="" rows="" placeholder="Enter Your Title Here"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input required name="" type="text" class="form-control" id="inputEmail4" placeholder="Enter Tutor Id">
    </div>
    <div class="form-group col-md-6">
    <input required name="" type="text" class="form-control" id="inputAddress2" placeholder="class id">
    </div>
    <div class="form-group col-md-6">
    <input required name="" type="text" class="form-control" id="inputAddress2" placeholder="subject id">
  </div>
  <div class="form-group col-md-6">
    <input required name="" type="number" class="form-control" id="inputAddress2" placeholder="salary">
  </div>
  <div class="form-group col-md-6">
    <input required name="" type="number" class="form-control" id="inputAddress2" placeholder="Number of days in per week">
  </div>
  
  </div>
  
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>






@endsection