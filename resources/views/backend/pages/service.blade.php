@extends('backend.master')

@section('content')


<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <style>
        * {
	box-sizing: border-box;
}


.container {
	background-color:whitesmoke;
	border-radius: 5px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	width: 520px;
	max-width: 100%;
}
.header {
	border-bottom: 1px solid #f0f0f0;
	background-color: #f7f7f7;
	padding: 10px 40px;
    display: flex;
    justify-content: center;
}

.header h2 {
	margin: 0;
}


.form {
	padding: 30px 40px;	
}

.form-control {
	margin-bottom: 10px;
	padding-bottom: 20px;
	position: relative;
}


.form-control input {
	border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-family: inherit;
	font-size: 14px;
	padding: 10px;
	width: 100%;
}


.form-control small {
	position: absolute;
	bottom: 0;
	left: 0;
	visibility:hidden;
}

.form-control.error small {
	visibility: visible;
}

.form button {
	background-color: gray;
	border: 2px;
	border-radius: 4px;
	color: #fff;
	display: block;
	font-family: inherit;
	font-size: 16px;
	padding: 8px;
	margin-top: 20px;
	width: 50%;
    display: flex;
    justify-content: center;
}


      </style>

<body>
    <div class="container">
        <div class="header">    
    <span class="material-icons-sharp">person</span>
    <h2> <b> Sign in</h2> </b>                  
    </div>
        <form id="form" class="form">
       
            <div class="form-control">
                <label for="username">Email / Username</label>
                <input type="email" placeholder="Enter email address / Username" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>

            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Enter Password" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Sign in</button>
        </form>
    </div>

    
</body>
   



@endsection