@extends('frontend.master')

@section('content')



<div>




	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Tutor Categories</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				
                @foreach($tutorList as $list)

				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/uploads/'.$list->images)}}"></div>
						<div class="ci-text">
							<h5><b>Name:</b>  {{$list->name}}</h5>
							<p>Contact: {{$list->contact}}</p>
							<span><b>email: </b>{{$list->email}}</span>
						</div>
					</div> 
				</div>
                @endforeach
				<!-- categorie -->
				
				
				
				
				
			</div>
		</div>
	</section>
	<!-- categories section end -->

	

@endsection