
<div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .col-xl-8{
        margin-left: 10%;
    }
    .card-header{
        background-color: aliceblue;
    }
    .card-body{
        background-color: aliceblue;
    }
    .form-control:focus {
    box-shadow: none;
    border-color: aliceblue;
    }


    .profile-button {
    background: #BA68C8;
    box-shadow: none;
    border: none;
    }

    .profile-button:hover {
    background: #682773;
    }

    .profile-button:focus {
    background: #682773;
    box-shadow: none;
    }

    .profile-button:active {
    background: #682773;
    box-shadow: none;
    }

    .back:hover {
    color: #682773;
    cursor: pointer;
    }
    
    </style>

                    <!-- USER Profile Update -->



<div class="container-xl px-4 mt-4">
 
 <hr class="mt-0 mb-4">
    <div class="row">
     <div class="col-xl-8" style="padding-left:200px ;">
         
            <div class="card mb-4">
              <div class="card-header"><b><h3>User Info </h3></b></div>
                <div class="card-body">

                    <form action="{{route('user.update')}}" method="post"  enctype="multipart/form-data">
                      @method('put')   
                     @csrf 
                 

                     <div>
                     <div class="col-md-6">
                        <label for="name"><b> Name: </b></label>
                         <input name="user_name" type="text" class="form-control" placeholder=" name" value="{{auth()->user()->name}}">
                     </div>
                     
                     </div>
                     <div>
                     <div class="col-md-6">
                        <label for="email"> <b>Email:</b></label>
                         <input readonly type="email" class="form-control" placeholder="Email" value="{{auth()->user()->email}}">
                     </div>
                     </div>

                      <div>
                     <div class="col-md-6">
                        <label for="password"><b>Pasaword: </b></label>
                         <input name="password" type="password" class="form-control" placeholder="password" value="{{auth()->user()->password}}">
                     </div>
                     </div>

                     <div>
                     <div class="col-md-6">
                        <label for="contact"><b>Contact:</b></label>
                         <input name="phone" type="text" class="form-control" value="{{auth()->user()->contact}}" placeholder="Phone number">
                     </div>
                     </div>
                     <div>
                     <div class="col-md-6">
                        <label for="address"><b>Address:</b></label>
                         <input name="address" type="text" class="form-control" placeholder="address" value="{{auth()->user()->address}}">
                     </div>
                     
                      </div>
                      <div>
                      <label for="images"><b>Images:</b></label>
                     <div class="col-md-6">
                         <input name="images" type="file" class="form-control" placeholder="images" >
                     </div>
                     
                      </div>
                 
                     <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>

                    </form>
                    <div><a href="{{route('tutor.webpage')}}"><span class="btn btn-danger">Go-to back</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

 </div>




                <!-- Tuition post edit blog For Tutor-->
            
    @if(auth()->user()->role == 'tutor')

        <div style="padding-top: 80px;">

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
                                    <a href="{{route('tutor.tuition.delete',$data->id)}}" class="btn btn-danger">delete</a>
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
     <div style="padding-top: 80px;">

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
                    <th scope="col">Tutor</th>
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
                    <td>{{$list->tutor->name}}</td>
                    <td>{{$list->class}}</td>
                    <td>{{$list->subject}}</td>
                    <td>{{$list->parent->name}}</td>
                    <td>{{$list->parent_contact}}</td>
                    <td>{{$list->parent_email}}</td>
                    <td>{{$list->address}}</td>
        
                    <td>
                        <a href="{{route('status.update',$list->id)}}" class="btn btn-primary">{{$list->status}}</a>
                    </td>
        
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
    
   
    



    <!-- Parents Hiring Info -->
    @if(auth()->user()->role == 'parents')
        <div style="padding-top: 80px;">

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
                    <th scope="col">Parents-Name</th>
                    <th scope="col">Parents-Contact</th>
                    <th scope="col">Parents-Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
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
                        <td>{{$list->parent->name}}</td>
                        <td>{{$list->parent_contact}}</td>
                        <td>{{$list->parent_email}}</td>
                        <td>{{$list->address}}</td>
                        <td>{{$list->status}}</td>
                        <td>
                         <div><a href="{{route('parents.tutor.hire.delete',$list->id)}}" class="btn btn-danger">delete</a> </div>

                        <div style="margin-top: 2px;"><a href="{{route('parents.hire.edit',$list->id)}}" class="btn btn-success">edit</a></div>
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