@extends('frontend.master')

@section('content')
<div>

<style>
	.space-ten{padding: 30px 0;}
</style>

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
	<!-- course section end -->




</div>

@endsection