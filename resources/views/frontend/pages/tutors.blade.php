@extends('frontend.master')

@section('content')
<div style="padding-top: 60px;">


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
						<span>Subject: {{$list->subject}}</span>
						<div class="price"> 
						<a href="{{route('tution.details',$list->id)}}">View-Details</a>
                          </div>
						</div>
					</div>
				</div>
				
			@endforeach	
				<!-- categorie -->
				
				
				
				

			</div>
		</div>
	</section>
	<!-- categories section end -->



	{{$tutorlist->links()}}
</div>
@endsection