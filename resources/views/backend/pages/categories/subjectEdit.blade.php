@extends('backend.master')

@section('content')


<form action="{{route('update.info',$editTest->id)}}" method="post" enctype="multipart/form-data">
@method('put')
    @csrf

    
<div class="form-group">
    <label for="inputName">Tutor_Name</label>
    <input required name="name" type="text" class="form-control" id="inputName" placeholder="Enter your name here" value="{{$editTest->tutor_name}}">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputSubject">Subject</label>
      <input required name="subject" type="text" class="form-control" id="" placeholder="subject" value="{{$editTest->subject}}">
    </div>

    <div class="form-group col-md-6">
      <label for="inputClass">Class</label>
      <input required name="class" type="number" class="form-control" id="inputClass" placeholder="class" value="{{$editTest->class}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group  col-md-6">
    <label for="inputDay">Day</label>
    <input required name="day" type="text" class="form-control" id="" placeholder="Enter Your Day Schadule here" value="{{$editTest->day}}">
  </div>

  <div class="form-group  col-md-6">
    <label for="inputTime">Time</label>
    <input required name="time" type="Time" class="form-control" id="inputTime" placeholder="time" value="{{$editTest->time}}">
  </div>

  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>




@endsection