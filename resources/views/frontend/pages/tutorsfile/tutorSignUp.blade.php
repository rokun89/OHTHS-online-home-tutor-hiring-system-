@extends('frontend.master')

@section('content')

  
<!-- signup section -->
<div style="margin: 130px;">


<section class="signup-section spad" style="background-color: #302939;">
		<div class="signup-bg set-bg" data-setbg="{{url('/frontend/images/Teach.jpg')}}"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Sign up as a Tutor and get the Tuition</h2>

							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->
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




  <hr>
@endsection






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
    
    <form class="signup-form" action="{{route('tutor.login')}}" method="post" >

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
        
      </div>
		

    </div>


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-Success">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
                 </form>


    </div>
  </div>
</div>










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

    
    <form  action="{{route('tutor.reg')}}" method="post" enctype="multipart/form-data">

    @csrf

<div class="form-row">
    <div class="form-group col-md-6">
<input required name="name" type="text" class="form-control" id="inputName" placeholder="Enter Your Name">
    </div>

    <div class="form-group col-md-6" >
<input required name="email" type="email" class="form-control" placeholder=" E-mail">
    </div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>

<div class="form-group col-md-6">
<input required name="phone" type="text" class="form-control" placeholder=" Contact">
</div>    

    <div class="form-group col-md-6">
   <input required name="degree" type="text" class="form-control" placeholder="degree">
    </div>
    <div>

 <input required name="address" type="text" class="form-control" placeholder="Address">
</div>
</div>



		

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>

  </form>

    </div>
  </div>
</div>





