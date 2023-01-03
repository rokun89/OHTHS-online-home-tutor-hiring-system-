@extends('frontend.master')

@section('content')



        <style>
            .signup-section{
                background-color: #fff;
            }
            .col-xl-8{
                background-color: #007b5e;
                
                margin-top: 5%;
                margin-bottom: 5%;
                margin-left:190px ;
                  
            }
        </style>

    <div class="signup-section">
		<div class="container-fluid">
			
				<div class="col-lg-12">
					
						<div class="section-title text-white text-left">
							
                        

                    <!-- USER Profile Update -->

    
        <div class="col-xl-8">
         
            <div class="card mb-4" style="background-color: #007b5e;">
                    <div class="card-header"><b><h3>User Information </h3></b>
                    </div>
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

                     @if(auth()->user()->role == 'tutor')
                     <div>
                     <div class="col-md-6">
                        <label for="degree"><b style="color:black ;">Degree:</b></label>
                         <input name="degree" type="text" class="form-control" value="{{auth()->user()->degree}}" placeholder="degree">
                     </div>
                     </div>
                    @endif

                     <div>
                     <div class="col-md-6">
                        <label for="address"><b style="color:black ;">Address:</b></label>
                         <input name="address" type="text" class="form-control" placeholder="address" value="{{auth()->user()->address}}">
                     </div>
                     
                      </div>

                    @if(auth()->user()->role == 'parents')
                     <div>
                     <div class="col-md-6">
                        <label for="city"><b style="color:black ;">City:</b></label>
                         <input name="city" type="text" class="form-control" value="{{auth()->user()->city}}" placeholder="city">
                     </div>
                     </div>
                    @endif
                 
                     <div class="mt-5 text-right"><button class="btn btn-secondary profile-button" type="submit">Update Profile</button></div>

                    </form>

                    <!-- <div><a href="{{route('user.profile.details')}}" class="btn btn-success">View-Details</a></div> -->

                    <p style="margin-top: 20px;"><a href="{{route('user.profile')}}"><span class="btn btn-danger"><-back</span></a> </p>
                
                </div>
            </div>
        </div>
    </div>
</div>

 </div>




                
</div>





@endsection