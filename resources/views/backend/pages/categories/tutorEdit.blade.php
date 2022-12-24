@extends('backend.master')

@section('content')


    <form action="{{route('tutor.update',$editTest->id)}}" method="post"    enctype="multipart/form-data">
    @method('put')

    @csrf


<div class="form-group">
    <label for="inputName">Name</label>
    <input name="name" type="text" class="form-control" id="inputName" placeholder="Enter Your Name Here" value="{{$editTest->name}}">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$editTest->email}}">
    </div>
    
    <div class="form-group col-md-6">
    <label for="inputAddress2">Contact</label>
    <input name="phone" type="number" class="form-control" id="inputAddress2" placeholder="Enter Your Contact Info" value="{{$editTest->contact}}">
  </div>
  
  
  <div class="form-group col-md-6">
    <label for="inputAddress2">Degree</label>
    <input name="degree" type="text" class="form-control" id="inputAddress2" placeholder="$" value="{{$editTest->degree}}">
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$editTest->address}}">
  </div>

  
  <div>
  <button type="submit" class="btn btn-primary">update</button>
  </div>

</form>



@endsection