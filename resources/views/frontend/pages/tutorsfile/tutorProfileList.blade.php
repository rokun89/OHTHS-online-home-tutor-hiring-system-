@extends('frontend.master')

@section('content')



<div>




	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Tutor Categories</h2>

                <p>
                    <a href="{{route('tutor.profile')}}"><button class="site-btn">Create Profile</button></a>
                </p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				
                @foreach($tutorList as $list)

				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/uploads/'.$list->images)}}"></div>
						<div class="ci-text">
							<h5><b>Subject:</b>  {{$list->subject}}</h5>
							<p></p>
							<span><b>Name: </b>{{$list->name}}</span>
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