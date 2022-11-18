
    <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">


    <style>
        .body{
    background-color: azure;
	display: flex;
	align-items: center;
	justify-content: center;
	

        }
        
.container{
    background-color:whitesmoke;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 700px;
	max-width: 100%;
}
    </style>

   <body class="body">

    <div class="container">
    <form class="signup-form" >

<div class="form-row">
    <div class="form-group col-md-6">
<label for="Name"><b>Email/Username:</b></label>
<input required name="email" type="email" placeholder="email/username">
    </div>

</div>
<div class="form-group col-md-6">
      <label for="inputPassword4"><b>Password:</b> </label>
      <input required name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>

<div>
<button type="submit" class="site-btn">Submit</button>
</div>

		
</form>
    </div>
        </body>