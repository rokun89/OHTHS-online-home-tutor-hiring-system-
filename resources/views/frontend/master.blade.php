<!DOCTYPE html>
<html lang="en">
<head>
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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla <br> dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter">
						<input type="text" placeholder="Name">
						<input type="text" class="last-s" placeholder="E-mail">
						<button class="site-btn">Sign Up Now</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Course Categories</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/math.jpg')}}"></div>
						<div class="ci-text">
							<h5>Math</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>10 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/physics.jpg')}}"></div>
						<div class="ci-text">
							<h5>Physics</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>10 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/chm.jpg')}}"></div>
						<div class="ci-text">
							<h5>Chemistry</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>10 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/biology.jpg')}}"></div>
						<div class="ci-text">
							<h5>Biology</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>15 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/eng.jpg')}}"></div>
						<div class="ci-text">
							<h5>English</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>20 Courses</span>
						</div>
					</div>
				</div>
				<!-- categorie -->
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/frontend/images/ict.jpg')}}"></div>
						<div class="ci-text">
							<h5>ICT</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span>15 Courses</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- categories section end -->


	<!-- search section -->
	<section class="search-section">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Search your course</h2>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form">
							<input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Category">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- course section -->
	<section class="course-section spad">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Featured Courses</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
		</div>
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".finance">Math</li>
				<li class="control" data-filter=".design">Physics</li>
				<li class="control" data-filter=".web">Chemistry</li>
				<li class="control" data-filter=".photo">ICT</li>
			</ul>                                       
			<div class="row course-items-area">
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/math1.jpg')}}">
							<div class="price">Salary: 10k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Math 1</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">50 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>
								<p>William | <span>Mathematician</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/physics1.jpg')}}">
							<div class="price">Salary: 15k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Physics 1</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">50 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
								<p>Parker | <span>Physics</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/chm1.jpg')}}">
							<div class="price">Salary: 15k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Chemistry 1</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">50 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="{{url('/frontend/images/chm 1.jpg')}}"></div>
								<p>William | <span>Chemistry</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/ict1.jpg')}}">
							<div class="price">Salary: 15k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>ICT 1</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">40 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/4.jpg"></div>
								<p>Parker | <span>ICT</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/math2.jpg')}}">
							<div class="price">Salary: 15k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Math 2</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">50 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/5.jpg"></div>
								<p>Parker | <span>Mathematician</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/physics2.jpg')}}">
							<div class="price">Salary: 10k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Physics 2</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">40 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/6.jpg"></div>
								<p>William | <span>Physics</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 web">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/chm2.jpg')}}">
							<div class="price">Salary: 10k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Chemistry 2</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">120 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/7.jpg"></div>
								<p>Parker | <span>Chemistry</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{url('/frontend/images/ict2.jpg')}}">
							<div class="price">Salary: 15k</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>ICT 2</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								<div class="students">50 Students</div>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="img/authors/8.jpg"></div>
								<p>William | <span>ICT</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- course section end -->


	<!-- signup section -->
	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
						<!-- signup form -->
						<form class="signup-form">
							<input type="text" placeholder="Your Name">
							<input type="text" placeholder="Your E-mail">
							<input type="text" placeholder="Your Phone">
							<label for="v-upload" class="file-up-btn">Upload Course</label>
							<input type="file" id="v-upload">
							<button class="site-btn">Search Couse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->



	

	@include('frontend.fixed.footer')





	<!--====== Javascripts & Jquery ======-->
	<script src="{{url('/frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{url('/frontend/js/mixitup.min.js')}}"></script>
	<script src="{{url('/frontend/js/circle-progress.min.js')}}"></script>
	<script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('/frontend/js/main.js')}}"></script>
</html>