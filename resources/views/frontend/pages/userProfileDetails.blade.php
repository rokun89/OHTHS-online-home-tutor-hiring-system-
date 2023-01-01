@extends('frontend.master')

@section('content')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<section style="background-color: gray ;">

    <!-- Tuition post edit blog For Tutor-->
            
    @if(auth()->user()->role == 'tutor')

        <div>

            <div class="container-xl px-4 mt-4">
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-8" style="margin-left:17% ;">
                        
                        <div class="card mb-4">
                         <div class="card-header"><b><h3>Tuition Info </h3></b></div>
                            <div class="card-body">

                            <div>
                        
                
                         <table class="table">
                         <thead>
                         <tr>
                         <th scope="col">id</th>
                         <th scope="col">Title</th>
                         <th scope="col">Tutor</th>
                         <th scope="col">Class</th>
                         <th scope="col">Subject</th>
                         <th scope="col">Salary</th>
                         <th scope="col">No of Weekend-Days</th>
                         <th scope="col">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                            @foreach($tuitionPost as $key=>$data)
                        
                                <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{{$data->title}}</td>
                                <td>{{$data->tutor->name}}</td>
                                <td>{{$data->class->name}}</td>
                                <td>{{$data->subject->name}}</td>
                                <td>{{$data->salary}}</td>
                                <td>{{$data->weekend_days}}</td>
                                
                    
                                <td>
                                    <!-- <a href="{{route('tutor.tuition.delete',$data->id)}}" class="btn btn-danger">delete</a> -->
                                    <a href="{{route('tutor.tuition.edit',$data->id)}}" class="btn btn-success">edit</a>
                                </td>
                    
                                </tr>
                            @endforeach
                        
                                </tbody>

                                </table>
                              </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>





         </div>
        
    @endif



   
     <!-- Hiring Blog For Tutor-->

@auth
    @if(auth()->user()->role == 'tutor')
     <div>

        <div class="container-xl px-4 mt-4">
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-12">
         
                    <div class="card mb-4">
                        <div class="card-header"><b><h3>Hiring Info </h3></b></div>
                            <div class="card-body">

                        <div>
        
            
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Student-Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Parents-Name</th>
                    <th scope="col">Parents-Contact</th>
                    <th scope="col">Parents-Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
        
                    @foreach($tuition as $key=>$list)
                    <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$list->student_name}}</td>
                    
                    <td>{{$list->class}}</td>
                    <td>{{$list->subject}}</td>
                    <td>{{$list->parent->name}}</td>
                    <td>{{$list->parent_contact}}</td>
                    <td>{{$list->parent_email}}</td>
                    <td>{{$list->address}}</td>
            @if($list->status=='pending')
                    <td>
                        <a href="{{route('status.update',$list->id)}}" class="btn btn-primary">{{$list->status}}</a>

                        <a href="{{route('status.delete',$list->id)}}" class="btn btn-danger">Reject</a>
                    </td>
            @endif
                        </tr>
        
                    @endforeach
                    </tbody>
                </table>
    @endif
@endauth
    
    
    
                   </div>

                   </div>
                   </div>
                </div>
            </div>
        </div>

    </div>



    <!-- tutor payments Info -->
    <!-- @if(auth()->user()->role == 'tutor')
        <div style="padding-top: 80px;">

            <div class="container-xl px-4 mt-4">
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-8" style="margin-left:17% ;">
         
                    <div class="card mb-4">
                        <div class="card-header"><b><h3>Payments Info </h3></b></div>
                            <div class="card-body">

                        <div>
        
            
                    <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Parents-Name</th>
                    <th scope="col">Parents-Contact</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Dew</th>
                    <th scope="col">Payments-Status</th>
                    
                    </tr>
                    </thead>
                    <tbody>
        
                    
                        <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
        
                    
                        </tbody>
                        </table>

    
    
    
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif  -->
    
   
    



    <!-- Parents Hiring Info -->
    @if(auth()->user()->role == 'parents')
        <div>

            <div class="container-xl px-4 mt-4">
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-12">
         
                    <div class="card mb-4">
                        <div class="card-header"><b><h3>Hiring Info </h3></b></div>
                            <div class="card-body">

                        <div>
        
            
                    <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Student</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">Class</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Tutor-Contact</th>
                    <th scope="col">Parents-Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Hiring-Status</th>
                    <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        
                    @foreach($hirelist as $key=>$list)
                        <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$list->student_name}}</td>
                        <td>{{$list->tutor->name}}</td>
                        <td>{{$list->class}}</td>
                        <td>{{$list->subject}}</td>
                        <td>{{$list->tutor->contact}}</td>
                        <td>{{$list->parent_contact}}</td>
                        <td>{{$list->address}}</td>
                        <td>{{$list->status}}</td>
        
                        <td>
                         <div>
                         <!-- <a href="{{route('pay.fees',$list->id)}}" class="btn btn-secondary">pay-fees</a> -->
                            <!-- <a href="{{route('parents.tutor.hire.delete',$list->id)}}" class="btn btn-danger">delete</a>  -->

                        <a href="{{route('parents.hire.edit',$list->id)}}" class="btn btn-success">edit</a></div>
                        </td>
        
                        </tr>
        
                    @endforeach
                        </tbody>
                        </table>

    
    
    
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif    






    <!-- Parents payments Info -->
    <!-- @if(auth()->user()->role == 'parents')
        <div style="padding-top: 80px;">

            <div class="container-xl px-4 mt-4">
                <hr class="mt-0 mb-4">
                <div class="row">
                    <div class="col-xl-10" style="margin-left:10% ;">
         
                    <div class="card mb-4">
                        <div class="card-header"><b><h3>Payments Info </h3></b></div>
                            <div class="card-body">

                        <div>
        
            
                    <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Payments-Date</th>
                    <th scope="col">Tutor-Name</th>
                    <th scope="col">Tutor-Contact</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Dew</th>
                    <th scope="col">Transaction-ID</th>
                    <th scope="col">Payments-Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    
                        <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
        
                        </tr>
        
                    
                        </tbody>
                        </table>

    
    
    
                        </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif  

							
                         
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
 -->


</section>


<hr>
@endsection