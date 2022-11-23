

<!-- Header section -->
<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="{{route('userlogin-url')}}" class="site-btn header-btn" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
					<nav class="main-menu">
						<ul>
							<li><a href="{{route('web.home')}}">Home</a></li>
							<li><a href="{{route('tutor.url')}}">Tutor</a></li>
							<li><a href="#">Course</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Contact</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->





<!-- Modal -->
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


    



    <style>
        .space-ten{padding: 10px 0;}
        
    </style>

   <body class="body">
    

    <div class="container">
    
    <form class="signup-form" >

<div class="form-row">
    <div class="form-group col-md-6">
<label for="Name"><b>Email/Username:</b></label>
<input required name="email" type="email" placeholder="email/username">
    </div>

</div>
<div class="form-group col-md-6">
      <label for="inputPassword4"><b>Password:</b> </label>
      <input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>


<div class="space-ten"></div>
                <div class="btn-ground text-center">
                <a href="{{route('web.home')}}">
                        <span class="btn btn-primary"> Go to Back</span>
                    </a>
                    
                </div>

		
</form>
    </div>
        </body>
	 
      </div>
      <div class="modal-footer">
        <button type="submit" class="site-btn">Submit</button>
      </div>
    </div>
  </div>
</div>


