@extends('backend.master')

@section('content')


<form action="{{route('subject.store.page')}}" method="post" enctype="multipart/form-data">

    @csrf

    
<div class="form-group">
    <label for="inputName">Name</label>
    <input required name="name" type="text" class="form-control" id="inputName" placeholder="Enter your name here">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputSubject">Subject</label>
      <input required name="subject" type="text" class="form-control" id="" placeholder="subject">
    </div>

    <div class="form-group col-md-6">
      <label for="inputClass">Class</label>
      <input required name="class" type="number" class="form-control" id="inputClass" placeholder="class">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group  col-md-6">
    <label for="inputDay">Day</label>
    <input required name="day" type="text" class="form-control" id="" placeholder="Enter Your Day Schadule here">
  </div>

  <div class="form-group  col-md-6">
    <label for="inputTime">Time</label>
    <input required name="time" type="Time" class="form-control" id="inputTime" placeholder="time">
  </div>

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection