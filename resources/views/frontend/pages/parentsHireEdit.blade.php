
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style>
    .col-xl-8{
        margin-left: 10%;
    }
    .card-header{
        background-color: aliceblue;
    }
</style>


<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-8" style="padding-left:200px ;">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header"><b><h3>Students Info [Edit] </h3></b></div>
                <div class="card-body">

                    <form class="card-header" action="{{route('parents.hire.update',$hireEdit->id)}}" method="post">
                        @method('put')
                        @csrf
                        
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputFirstName">Student-Name</label>
                            <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter student name" value="{{$hireEdit->student_name}}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for=""> Class</label>
                                <input name="class" class="form-control" id="" type="text" placeholder="Class" value="{{$hireEdit->class}}">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Subject</label>
                                <input name="subject" class="form-control" id="inputLastName" type="text" placeholder="subject" value="{{$hireEdit->subject}}">
                            </div>
                        </div>
                        
                        <div class="row gx-3 mb-3">
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Parents-Contact</label>
                                <input name="parents_contact" class="form-control" id="inputOrgName" type="text" placeholder="parents_contact" value="{{$hireEdit->parent_contact}}">
                            </div>
                            
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail">Parents-email</label>
                                <input name="parents_email" class="form-control" type="email" id="inputLocation" type="text" placeholder="Enter parents_email" value="{{$hireEdit->parent_email}}">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Address</label>
                            <input name="address" class="form-control" id="inputEmailAddress" type="text" placeholder="Enter your address" value="{{$hireEdit->address}}">
                        </div>
                        <button class="btn btn-success" type="submit">update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
