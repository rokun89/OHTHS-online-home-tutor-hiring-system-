<link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">

        <style>
            .space-ten{padding: 20px 0;}
        </style>




    <h3 style="display:flex; justify-content:center"><u>Registration Form</u></h3>
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
<label for="contact"><b> Contact:</b></label>
<input type="text" placeholder=" Contact">
</div>

<div class="form-group col-md-6">
<label for="nid"><b> N-ID:</b></label>
<input type="text" placeholder="n-id">
    </div>

    <div class="form-group col-md-6">
<label for="inputPassword4"><b>Password:</b> </label>
<input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
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
<button type="submit" class="site-btn space-ten">Submit</button>
</div>
<div class="space-ten"></div>
                  
<div>
<a href="{{route('userlogin-url')}}">Already Registered</a>
</div>

		
</form>