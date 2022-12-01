




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<style>
    body {
        background: linear-gradient(to right, #b92b27, #1565c0);
}

.form-control:focus {
  box-shadow: none;
  border-color: #BA68C8;
}

.profile-button {
  background: #BA68C8;
  box-shadow: none;
  border: none;
}

.profile-button:hover {
  background: #682773;
}

.profile-button:focus {
  background: #682773;
  box-shadow: none;
}

.profile-button:active {
  background: #682773;
  box-shadow: none;
}

.back:hover {
  color: #682773;
  cursor: pointer;
}
</style>



<div class="container rounded bg-white mt-5">
        <div class="row">

        <div>
           <div class="p-3 py-5">
             <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-row align-items-center back">

                        <a href="{{route('web.home')}}"><button class="btn btn-danger">back</button></a>
                        </div>
                    </div>

    <form action="{{route('tutor.profile.store')}" method="post" enctype="multipart/form-data">

        @csrf


<div class="form-group">
    <label for="inputImages">Images</label>
    <input required name="images" type="file" class="form-control" id="" placeholder="Upload Your Images">
  </div>

  <div class="form-row">

  <div class="form-group col-md-4">
    <input required name="name" type="text" class="form-control" id="inputName" placeholder="Enter Your Name Here">
  </div>

    <div class="form-group col-md-4">
      
      <input required name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-4">
    
    <input required name="phone" type="number" class="form-control" id="inputAddress2" placeholder="Enter Your Contact Info">
  </div>
  <div class="form-group col-md-4">
    
    <input required name="n_id" type="number" class="form-control" id="inputAddress2" placeholder="Your n-id">
  </div>
  <div class="form-group col-md-4">
    
    <input required name="subject" type="text" class="form-control" id="inputAddress2" placeholder="Enter your subject">
  </div>
  <div class="form-group col-md-4">
    
    <input required name="salary" type="number" class="form-control" id="inputAddress2" placeholder="$salary$">
  </div>
  </div>
  <div class="form-row ">
    <div class="col-md-6" >
    <input required name="address" type="text" class="form-control" id="inputAddress" placeholder="Address-1234 Main St">
    </div>

  <div class="col-md-6">

    <input type="text"  class="form-control" name="description" id="" cols="" rows="" placeholder="Enter Description"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
  <label for="">Status</label>
    <select name="status" id="" class="form-control">
  <option value="active">Active</option>
 <option value="inactive">Inactive</option>
    </select>
 </div>
    </div>
  
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
    

                </div>
            </div>

        
        </div>
    </div>