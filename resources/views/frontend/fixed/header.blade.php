

<!-- Header section -->
<header style="background-color:#282A35 ;padding: 5px;margin:buttom 10%">
		<div class="container">
			<div class="row">
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				
				<div class="col-lg-12 col-md-12">
					
	<nav class="main-menu">
		<ul>
    
			<li><a href="{{route('web.home')}}">Home</a></li>
			<li><a href="{{route('tutor.page')}}">Tutor</a></li>
			<li><a href="{{route('tution.list')}}">Course</a></li>
			<li><a href="{{route('about.me')}}">About</a></li>
      <li><a href="{{route('tutor.url')}}">Become a tutor</a></li>
			<li style="padding-left: 250px;" class="btn-group" role="group" aria-label="Basic example">

@auth
      
<li class="btn-group" role="group" aria-label="Basic example">
  <a href="{{route('user.profile')}}">{{auth()->user()->name}} </a>
<a href="{{route('user.logout')}}" style="margin-left: 2px;"><span type="button"> |
  Logout</span></a></li>

@else

<a href="http://" target="_blank" rel="noopener noreferrer"></a><button data-toggle="modal" data-target="#exampleModalCenter" type="button" class="btn btn-secondary">Log in</button>

  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Registration</button>

  </li>
  
  @endauth
							

						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->






<!-- Modal for login -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
	  
	  <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">


    

    <div>
    
    <form class="signup-form" action="{{route('userlogin')}}" method="post" >

	@csrf

<div class="form-row">
    <div class="form-group">
<label for="Name"><b>Email/Username:</b></label>
<input required name="email" type="email" class="form-control" id="inputEmail/Username" placeholder="email/username">
    </div>

</div>
<div class="form-group">
      <label for="inputPassword4"><b>Password:</b> </label>
      <input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

                <div class="btn-ground text-center">
                <p style="color: blue;">Not-yet Registered,Go to Registration</p>
                    
                </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
	 
      </div>
      
    </div>
  </div>
</div>




<!-- Modal for registration start -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
	<link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">

        <style>
            .space-ten{padding: 20px 0;}
        </style>




    <h2 style="display:flex; justify-content:center"><u><i> Parents Registration Form</u></i></h2>


        <form class="signup-form" action="{{route('registration')}}" method="post" enctype="multipart/form-data">

		@csrf

<div class="form-row">
    <div class="form-group col-md-6">
<label for="Name"><b>Name:</b></label>
<input required name="name" type="text" placeholder="Enter Your Name">
    </div>

    <div class="form-group col-md-6" >
<label for="Email"> <b>E-mail:</b></label>
<input name="email" type="email" placeholder=" E-mail">
    </div>

	<div class="form-group col-md-6">
<label for="inputPassword4"><b>Password:</b> </label>
<input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="Contact"><b>Contact:</b></label>
<input required type="text" placeholder="Contact">
    </div>
  
</div>

<div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
<div class="space-ten"></div>
                  
<div>
<a href="{{route('web.home')}}">Already Registered</a>
</div>

		
</form>

    </div>
  </div>
</div>


<!-- Modal for registration end -->