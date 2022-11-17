
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    

<style>
        * {
	box-sizing: border-box;
}

body {
	background-color: white;
	
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	
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
    <h2>Sign in</h2>                   
    </div>
	
	@if(Session()->has('message'))
 <p class="alert alert-success">{{session()->get('message')}}</p> 

@endif
        <form id="form" class="form" action="{{route('do.login')}}" method="post">

		@csrf
       
            <div class="form-control">
                <label for="username">Email / Username</label>
                <input name="email" type="email" placeholder="Enter email address / Username" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>

            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input name="password" type="password" placeholder="Enter Password" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
            </div>
          
            <button type="submit" class="btn btn-outline-primary">Sign in</button>
        </form>
    </div>

    
</body>
   
