


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
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" src="{{auth()->user()->images}}" width="90">
                    <span class="font-weight-bold">{{auth()->user()->name}}</span>
                    <span class="text-black-50">{{auth()->user()->email}}</span>
                </div>
            </div>
        <div class="col-md-8">
           <div class="p-3 py-5">
             <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-row align-items-center back">
                <a href="{{route('web.home')}}"><button class="btn btn-danger"> back to home</button></a>
                        </div>
                    </div>


                <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                @method('put')   
                @csrf 
                    

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input name="user_name" type="text" class="form-control" placeholder=" name" value="{{auth()->user()->name}}">
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input readonly type="email" class="form-control" placeholder="Email" value="{{auth()->user()->email}}">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input name="password" type="password" class="form-control" placeholder="password" value="{{auth()->user()->password}}">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input name="phone" type="text" class="form-control" value="{{auth()->user()->contact}}" placeholder="Phone number">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input name="address" type="text" class="form-control" placeholder="address" value="{{auth()->user()->address}}">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <input name="images" type="file" class="form-control" placeholder="images" >
                        </div>
                        
                    </div>
                    
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>

    </form>

                </div>
            </div>
        </div>
    </div>