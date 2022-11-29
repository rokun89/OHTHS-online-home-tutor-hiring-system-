@extends('frontend.master')

@section('content')


<style>
.search {
    background-color: #fff;
    padding: 4px;
    border-radius: 5px;
}



::placeholder {
    background-color: none;
    opacity: 1
}

.search-2 {
    position: relative;
    width: 100%
}

.search-2 input {
    height: 45px;
    border: none;
    width: 100%;
    padding-left: 18px;
    padding-right: 100px
}

.search-2 input:focus {
    border-color: none;
    box-shadow: none;
    outline: none
}

.search-2 i {
    position: absolute;
    top: 12px;
    left: -10px;
    font-size: 24px;
    color: #eee;
}

.search-2 button {
    position: absolute;
    right: 1px;
    top: 0px;
    border: none;
    height: 45px;
    background-color: #dc3545;
    color: #fff;
    width: 90px;
    border-radius: 4px
}
.srccontainer{
	width: 55%;
	margin-left: 22%;
}

@media (max-width:800px) {
    .search-1 input {
        border-right: none;
        border-bottom: 1px solid #eee
    }

    .search-2 i {
        left: 4px
    }

    .search-2 input {
        padding-left: 34px
    }

    .search-2 button {
        height: 37px;
        top: 5px
    }
}
		</style>



<section class="hero-section set-bg" data-setbg="{{url('/frontend/images/bg.jpg')}}">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Hire The Best Home Tutor.</h2>
				<p>Elimination of travel time for both parents and tutors.Parents can get highly qualified tutors at affordable prices. <br>Tutors shares a wealth of knowledge, experience, and academic degrees which they have.</p>

		<p>
	<div class="srccontainer">
	  <div class="search"> 
		<i class='bx bx-search-alt'></i> 
			<div> 
		<div class="search-2"> 
		   <i class='bx bxs-map' ></i> 
			<input style="color: black;" name="" type="text" placeholder="Serach Here" value="">
				<button type="submit">Search</button> 
				</div> 
			</div> 
		</div>
	</div>
				
			</p>

		</div>
			
		</div>
	</section> 
	<!-- Hero section end -->




@auth


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
	<!--<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
						 signup form 
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
	</section> -->
	<!-- signup section end -->


@endauth

@endsection