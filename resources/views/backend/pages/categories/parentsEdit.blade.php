@extends('backend.master')

@section('content')

@if(session()->has('messages'))

<p class="alert alert-success" {{session()->get('messages')}}></p>

@endif

<form action="{{route('parents.update',$editTest->id)}}" method="post" enctype="multipart/form-data">
    
@method('put')


  @csrf


<div class="form-group">
    <label for="inputAddress2">Images</label>
    <input name="images" type="file" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here" value="{{$editTest->images}}">
  </div>

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
      <label for="inputPassword4">Password</label>
      <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" value="{{$editTest->password}}">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress2">Contact</label>
    <input name="contact" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your contact Here" value="{{$editTest->contact}}">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">n-id</label>
    <input name="n_id" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your n-id Here" value="{{$editTest->n_id}}">
  </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="{{$editTest->address}}">
  </div>

  <div>
    <label for="">Enter description</label>
    <textarea  class="form-control" name="description" id="" cols="" rows="" placeholder="Enter Description">{{$editTest->description}}</textarea>
  </div>

  <div>
    <label for="">Occupation</label>
    <textarea  class="form-control" name="occupation" id="" cols="" rows="" placeholder="Enter Occupation">{{$editTest->occupation}}</textarea>
  </div>
  
  <div class="form-row">

    <div>
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option @if($editTest->status=='active') selected @endif value="active">Active</option>
 <option @if($editTest->status=='inactive') selected @endif value="inactive">Inactive</option>
    </select>
 </div>


  </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>



@endsection