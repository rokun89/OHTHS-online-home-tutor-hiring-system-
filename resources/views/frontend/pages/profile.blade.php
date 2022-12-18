@extends('frontend.master')

@section('content')
<section class="signup-section spad">
		<div class="container-fluid">
			
				<div class="col-lg-12">
					
						<div class="section-title text-white text-left">
							
                        

                    <!-- USER Profile Update -->

    
     <div class="col-xl-8" style="margin-left:190px ;">
         
            <div class="card mb-4">
            <div class="card-header"><b><h3 style="color: black;">User Info </h3></b></div>
                <div class="card-body">

                    <form action="{{route('user.update')}}" method="post"  enctype="multipart/form-data">
                      @method('put')   
                     @csrf 
                 

                     <div>
                     <div class="col-md-6">
                        <label for="name"><b style="color:black ;"> Name: </b></label>
                         <input name="user_name" type="text" class="form-control" placeholder=" name" value="{{auth()->user()->name}}">
                     </div>
                     
                     </div>
                     <div>
                     <div class="col-md-6">
                        <label for="email"> <b style="color:black ;">Email:</b></label>
                         <input readonly type="email" class="form-control" placeholder="Email" value="{{auth()->user()->email}}">
                     </div>
                     </div>

                      <div>
                     <div class="col-md-6">
                        <label for="password"><b style="color:black ;">Password: </b></label>
                         <input name="password" type="password" class="form-control" placeholder="password" value="{{auth()->user()->password}}">
                     </div>
                     </div>

                     <div>
                     <div class="col-md-6">
                        <label for="contact"><b style="color:black ;">Contact:</b></label>
                         <input name="phone" type="text" class="form-control" value="{{auth()->user()->contact}}" placeholder="Phone number">
                     </div>
                     </div>
                     <div>
                     <div class="col-md-6">
                        <label for="address"><b style="color:black ;">Address:</b></label>
                         <input name="address" type="text" class="form-control" placeholder="address" value="{{auth()->user()->address}}">
                     </div>
                     
                      </div>
                      <div>
                      <label for="images"><b style="color:black ;">Images:</b></label>
                     <div class="col-md-6">
                         <input name="images" type="file" class="form-control" placeholder="images" >
                     </div>
                     
                      </div>
                 
                     <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>

                    </form>

                    <div><a href="{{route('user.profile.details')}}" class="btn btn-success">View-Details</a></div>

                    <div style="margin-top: 20px;"><a href="{{route('tutor.webpage')}}"><span class="btn btn-danger">Go-to back</span></a> </div>
                     
                    

                </div>
            </div>
        </div>
    </div>
</div>

 </div>




                
</section>




@endsection    