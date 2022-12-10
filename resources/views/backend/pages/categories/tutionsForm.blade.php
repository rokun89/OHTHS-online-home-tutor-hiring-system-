@extends('backend.master')

@section('content')


<form action="{{route('tution.form.store')}}" method="post">

    @csrf

 <div class="form-group">
    <input required type="text"  class="form-control" name="title" id="" cols="" rows="" placeholder="Enter Your Title Here"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="class">Tutor</label>

  <select name="tutor" id="tutor" class="form-control">
      @foreach($tutorId as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
      </select>

    </div>
    <div class="form-group col-md-6">
      <label for="class">Class</label>

      <select name="class" id="class" class="form-control">
        @foreach($cls as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group col-md-6">

    <label for="subject">Subject</label>

 <select name="subject" id="class" class="form-control">
  @foreach($sub as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
      </select>
  </div>
  <div class="form-group col-md-6">
    <input required name="salary" type="number" class="form-control" id="inputAddress2" placeholder="salary">
  </div>
  <div class="form-group col-md-6">
    <input required name="days" type="number" class="form-control" id="inputAddress2" placeholder="Number of days in per week">
  </div>
  
  </div>
  
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>






@endsection