<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="icon" href="{{url('logo.png')}}">
	<title>Online Home Tutor Hiring System</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{url('logo.png')}}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	




	@include('frontend.fixed.header')







	<!-- Hero section -->
<section class="hero-section set-bg" data-setbg="{{url('/frontend/images/bg.jpg')}}">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Hire The Best Home Tutor.</h2>
				<p>Elimination of travel time for both parents and tutors.Parents can get highly qualified tutors at affordable prices. <br>Tutors shares a wealth of knowledge, experience, and academic degrees which they have.<br>
				<a href="{{route('registration-url')}}" class="site-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Registration</a>
			</p>
			</div>
			
		</div>
	</section> 
	<!-- Hero section end -->




	<!-- Modal section start -->


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
        <form class="signup-form" >

<div class="form-row">
    <div class="form-group col-md-6">
<label for="Name"><b>Name:</b></label>
<input type="text" placeholder="Enter Your Name">
    </div>

    <div class="form-group col-md-6" >
<label for="Email"> <b>E-mail:</b></label>
<input type="email" placeholder=" E-mail">
    </div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="contact"><b> Contact:</b></label>
<input type="text" placeholder=" Contact">
</div>

<div class="form-group col-md-6">
<label for="nid"><b> N-ID:</b></label>
<input type="text" placeholder="n-id">
    </div>

    <div class="form-group col-md-6">
<label for="inputPassword4"><b>Password:</b> </label>
<input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>
        </div>

<div>
<label for="nid"><b> Address:</b></label>
<input type="text" placeholder="123/Avila,CA 931">
</div>

<div>
<label for="v-upload" class="file-up-btn">Upload your Images</label>
<input type="file" id="v-upload">
</div>

<div>
<button type="submit" class="site-btn space-ten">Submit</button>
</div>
<div class="space-ten"></div>
                  
<div>
<a href="{{route('userlogin-url')}}">Already Registered</a>
</div>

		
</form>

    </div>
  </div>
</div>


<!-- Modal section end -->






	
	

	@yield('content')






	

	@include('frontend.fixed.footer')








	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('/frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{url('/frontend/js/mixitup.min.js')}}"></script>
	<script src="{{url('/frontend/js/circle-progress.min.js')}}"></script>
	<script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('/frontend/js/main.js')}}"></script>
</html>