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
				<h2>Our Course Tutor</h2>
			</div>
			<div class="row">
				<!-- categorie -->
				@foreach($tutorlist as $list)

			<div class="col-lg-4 col-md-6">
				<div class="categorie-item">
				  <div class="ci-thumb set-bg" data-setbg="{{url('/')}}"></div>
					<div class="ci-text">
						<h5><b>Name: </b>{{$list->name}}</h5>
						<p>Contact: {{$list->contact}}</p>
						<p>Address: {{$list->address}}</p>
						<span>Degree: {{$list->degree}}</span>
						<div class="price"> 
						<a href="{{route('tution.details',$list->id)}}">View-Details</a>
                          </div>
						</div>
					</div>
				</div>
				
			@endforeach	
		
				
			</div>
			
		</div>
	</section>
	<!-- categories section end -->


	


	<!-- course section -->
	<section class="course-section spad">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Featured Courses</h2>
				
				<div class="space-ten"></div>

			</div>
		</div>
		<div class="course-warp">
			                                       
			<div class="row course-items-area">
				<!-- course -->

			@foreach($tutionlist as $list)	

				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<div>
							
						</div>
						<div class="course-info">
						<div class="site-btn">Name: {{$list->tutor->name}}</div>
							<div class="course-text">
								<h5><b>Subject: </b>{{$list->subject->name}} </h5>
								<p>Title: {{$list->title}}</p>
								<p>Class: {{$list->class->name}}</p>
								<p> Weekend-Days:{{$list->weekend_days}}</p>
								<div class="students"><b>Salary: </b> {{$list->salary}}</div>
							</div>
							<div class="course-author">
								
						<p> <a href="{{route('fc.tution.details',$list->id)}}"> <span>View-Details</span></a> </p> 
							</div>
						</div>
					</div>
				</div>
			@endforeach	
				<!-- course -->
				
				
			</div>
		</div>
	</section>


	 
	<!-- signup section -->
	<section class="signup-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>About Me</h2>
							<p>I am a Student of <b> "IUBAT-International University of Business Agricultural and Technology" </b> department of <b> "Computer Science and Engineering" </b> (CSE). <br>
							<br>
							I am a Web developer with the ability to learn and collaborate in rapidly changing environments and compositions, and I am trying to utilize my ability and knowledge to enhance my career in the field of Web development.</p>
							<div style="margin-top: 50px;">
						<ul>
							<li><b>Name:</b> Monir Hossen</li>
							<li><b>Address: </b> House 73/F;Road 12/B;Sector 10 <br> Uttara, Dhaka-1230</li>
							<li><b>Mobile: </b> +880 1609235391</li>
							<li><b>Email: </b> 19103045@iubat.edu</li>
							<li><b> Facebook</b>: <a href="https://www.facebook.com/shahrier.rokun/">go_to_facebook</a></li>
							<li><b>Linkedin</b>: <a href="https://www.linkedin.com/in/monir-hossen-768269246/">go_to_linkedin</a></li>
							<li><b> Git-hub</b>: <a href="https://github.com/rokun89">go_to_github</a></li>
						</ul>
						


					</div>

							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->


 @endauth

@endsection