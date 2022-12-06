@extends('backend.master')

@section('content')

<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">


  @csrf


<div class="form-group">
    <label for="inputAddress2">Images</label>
    <input require name="images" type="file" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here">
  </div>

  <div class="form-group">
    <input require name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Name Here">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input require name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      
      <input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
    <input required name="contact" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your contact Here">
  </div>
  <div class="form-group col-md-6">
    
    <input required name="n_id" type="text" class="form-control" id="inputAddress2" placeholder="Enter Your n-id Here">
  </div>
  </div>
  
  <div class="form-group">
    <input required name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div>
    
    <textarea  class="form-control" name="description" id="" cols="" rows="" placeholder="Enter Description"></textarea>
  </div>

  <div>
    
    <textarea  class="form-control" name="occupation" id="" cols="" rows="" placeholder="Enter Occupation"></textarea>
  </div>
  
  <div class="form-row">


    <div>
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option value="active">Active</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>


  </div>

  <button type="submit" class="btn btn-primary">submit</button>
</form>



@endsection