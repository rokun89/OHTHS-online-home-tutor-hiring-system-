@extends('backend.master')

@section('content')


<form action="{{route('subject.store.page')}}" method="post" enctype="multipart/form-data">

    @csrf

    

    <div class="form-group col-md-6">
    <div class="form-group col-md-6">
   
    <label for="inputName">Name</label>
    <input required name="name" type="text" class="form-control" id="inputName" placeholder="Enter your name here">
  </div>
  <div class="form-group col-md-6">
      <label for="inputClass">Class</label>

      <select name="class" id="class" class="form-control">
        @foreach($cls as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
      
    </div>
    </div>
    <div class="form-group col">


<button type="submit" class="btn btn-primary">Submit</button>
</div>
 
</form>




@endsection