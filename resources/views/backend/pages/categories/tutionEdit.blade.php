@extends('backend.master')

@section('content')


<form action="{{route('tution.update',$editTution->id)}}" method="post">

    @method('put')
    @csrf

 <div class="form-group">
    <input type="text"  class="form-control" name="title" id="" cols="" rows="" placeholder="Enter Your Title Here" value="{{$editTution->title}}"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text"  class="form-control" name="tutor" id="" cols="" rows="" placeholder="Tutor Name" value="{{$editTution->tutor_id}}">
    </div>

    <div class="form-group col-md-6">
      <input type="text"  class="form-control" name="class" id="" cols="" rows="" placeholder="Class" value="{{$editTution->class_id}}">
    </div>

    <div class="form-group col-md-6">

     <input type="text"  class="form-control" name="subject" id="" cols="" rows="" placeholder="Subject" value="{{$editTution->subject_id}}">
  </div>

  <div class="form-group col-md-6">
    <input name="salary" type="number" class="form-control" id="inputAddress2" placeholder="salary" value="{{$editTution->salary}}">
  </div>

  <div class="form-group col-md-6">
    <input name="days" type="number" class="form-control" id="inputAddress2" placeholder="Number of days in per week" value="{{$editTution->weekend_days}}">
  </div>
  
  </div>
  
  <div>
  <button type="submit" class="btn btn-success">update</button>
  </div>

</form>




@endsection