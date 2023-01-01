@extends('frontend.master')

@section('content')

<style>
                .user-section{
                    background-color: #282A35;
                    color: #fff;
                    margin-top: 10%;
                    margin-left: 20%;
                    margin-right: 20%;
                    padding: 5%;
                    border: 2px;
	                border-radius: 4px;
                    height: auto;
                }
                .Div{
                    background-color: #282A35;
                     
                    padding: 3%;
                    border: 2px;
	                border-radius: 4px;
                   
                }
                /* hr{
                    background-color: #fff;
                } */
            </style>

<section class="user-section">


                            <h2 style="color: #fff;">About {{auth()->user()->name}}</h2> <hr>

						<div class="Div">
						    <ul>
							<li><b>Name:</b> {{auth()->user()->name}}</li>
                            <li><b>Email: </b> {{auth()->user()->email}}</li>
                            <li><b>Mobile: </b> {{auth()->user()->contact}}</li>
							<li><b>Address:</b> {{auth()->user()->address}}</li>
                            @if(auth()->user()->role == 'tutor')
                                <li><b>Degree:</b> {{auth()->user()->degree}}</li>
                            @endif
						    </ul> <br> <br>
                            <p>
                                <a style="margin-left: 65%" href="{{route('user.profile.edit.btn')}}"><span class="btn btn-primary">Edit-info</span></a>

                                <a href="{{route('user.profile.details')}}" class="btn btn-success">View-details</a>
                            </p>

                            <hr style="background-color: #fff;">
                            <p style="margin-top: 20px;"><a href="{{route('tutor.webpage')}}"><span class="btn btn-danger"><-back</span></a> </p>
                        </div>   
</section>









@endsection    