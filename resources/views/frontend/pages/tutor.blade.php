@extends('frontend.master')

@section('content')

<!-- signup section -->
<div style="padding-top:60px ;">


<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="{{url('/frontend/images/Teacher.jpg')}}"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up to became a teacher</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
                            <p>
                         <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-secondary btn-lg">LOGIN</button>

                         <button data-toggle="modal" data-target="#exampleModal" class="btn btn-secondary btn-lg">Registration</button></a>
                            </p>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>

    </div>
	<!-- signup section end -->





@endsection





<!-- Modal For Registration-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

      <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">

    
        <form class="signup-form" >

<div class="form-row">
    <div class="form-group col-md-6">
<label for="Name"><b>Name:</b></label>
<input type="text" placeholder="Enter Your Name">
    </div>

    <div class="form-group col-md-6" >
<label for="Email"> <b>E-mail:</b></label>
<input type="email" placeholder=" E-mail">
    </div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputPassword4"><b>Password:</b> </label>
<input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<label for="contact"><b> Contact:</b></label>
<input type="text" placeholder=" Contact">
</div>

<div class="form-group col-md-6">
<label for="nid"><b> N-ID:</b></label>
<input type="text" placeholder="n-id">
    </div>

    <div class="form-group col-md-6">
<label for="nid"><b> Subject:</b></label>
<input type="text" placeholder="subject">
    </div>    

    <div class="form-group col-md-6">
<label for="nid"><b> Salary:</b></label>
<input type="text" placeholder="$$$">
    </div>

        </div>

<div>
<label for="nid"><b> Address:</b></label>
<input type="text" placeholder="123/Avila,CA 931">
</div>

<div>
<label for="v-upload" class="file-up-btn">Upload your Images</label>
<input type="file" id="v-upload">
</div>

<div>
<button type="submit" class="btn btn-success">Submit</button>
</div>

		
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>





<!-- Modal for LOGIN -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



      <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">


    <div>
    
    <form class="signup-form" action="" method="post" >

	@csrf

<div class="form-row">
    <div class="form-group">
<label for="Name"><b>Email/Username:</b></label>
<input required name="email" type="email" class="form-control" id="inputEmail/Username" placeholder="email/username">
    </div>

</div>
<div class="form-group">
      <label for="inputPassword4"><b>Password:</b> </label>
      <input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

                <div class="btn-ground text-center">
                <p style="color: blue;">Not-yet Registered,Go to Registration</p>
                    
                </div>
				<div>
        <button type="submit" class="btn btn-Success">Submit</button>
      </div>
		
</form>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>