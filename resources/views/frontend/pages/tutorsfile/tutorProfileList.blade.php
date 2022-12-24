@extends('frontend.master')

@section('content')



<div>

 @if(auth()->user()->role=='tutor')


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Our Tutor Categories</h2>

					<a href="{{route('tuition.post')}}">
						<button class="site-btn"> Post-Tuition</button>
					</a>
				</p>
			</div>
			<div class="row">
				<!-- categorie -->
				
                @foreach($tutorList as $list)

				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						
						<div class="ci-text">
							<h5><b>Name:</b>  {{$list->name}}</h5>
							<p>Contact: {{$list->contact}}</p>
							<p>Address: {{$list->address}}</p>
							<span><b>Degree: </b>{{$list->degree}}</span>
							<a href="#">
							</a>
						</div>
							
						
					</div> 
				</div>
                @endforeach
				<!-- categorie -->
				
				
				
				
				
			</div>
		</div>
	</section>
	<!-- categories section end -->

 @endif

 <hr>
@endsection