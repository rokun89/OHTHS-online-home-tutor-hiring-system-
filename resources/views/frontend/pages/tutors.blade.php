@extends('frontend.master')

@section('content')
<div style="padding-top: 60px;">



	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Tutor Categories</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="row">
				<!-- categorie -->
				@foreach($tutorlist as $Tlist)
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="{{url('/uploads/'.$Tlist->images)}}"></div>
						<div class="ci-text">
							<h5> <b>Subject: </b>{{$Tlist->subject}}</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<span> <b>Name: </b>{{$Tlist->name}}</span>
						</div>
					</div>
				</div>
				
				@endforeach
				
				
			</div>
		</div>
	</section>
	<!-- categories section end -->


</div>
@endsection