@extends('backend.master')

@section('content')


<style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}

.card{
    margin-bottom:20px;
    border:none;
}

.box {
    width: 500px;
    padding: 50px;
    background: #191919;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px;
	margin-left: 400px;
}

.tinput,
.pinput {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}
.box p{
	color: beige;
}

    

</style>


<body>
    
    
    <div class="container">
         <div class="row"> 
            <div class="col-md-6"> 
                <div class="card"> 
                    <form class="box">
                        
                        <h1>Login</h1> 
                        <p> Please enter your username and password!</p> 

                        <input class="tinput" type="text" name="email" placeholder="Username"> 
                        
                        <input class="pinput" type="password" name="password" placeholder="Password"> 
                        
                        <button type="button" class="btn btn-danger">Danger</button>
                        
                         </form> 
                        </div> 
                    </div> 
                </div>
</div>
      
      
</body>





@endsection