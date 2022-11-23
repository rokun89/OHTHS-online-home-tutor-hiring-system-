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
				<p>Elimination of travel time for both parents and tutors.Parents can get highly qualified tutors at affordable prices. <br>Tutors shares a wealth of knowledge, experience, and academic degrees which they have.

			</p>
			</div>
			
		</div>
	</section> 
	<!-- Hero section end -->




	








	
	

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