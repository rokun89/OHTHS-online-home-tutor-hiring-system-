@extends('backend.master')

@section('content')

@if(session()->has('messages'))

<p class="alert alert-success" {{session()->get('messages')}}></p>

@endif

<form action="{{route('parents.update',$editTest->id)}}" method="post" enctype="multipart/form-data">
    
@method('put')


  @csrf


  <div class="form-group">
    <label for="inputAddress2">Name</label>
    <input name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here" value="{{$editTest->name}}">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$editTest->email}}">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress2">Contact</label>
    <input name="contact" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your contact Here" value="{{$editTest->contact}}">
  </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$editTest->address}}">
  </div>
  

  <button type="submit" class="btn btn-primary">update</button>
</form>



@endsection