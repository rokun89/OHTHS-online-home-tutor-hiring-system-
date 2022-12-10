@extends('frontend.master')

@section('content')
<div style="padding-top: 60px;">

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
                <div class="card-header"><b><h3>Students Info </h3></b></div>
                <div class="card-body">

                    <form class="card-header" action="{{route('tution.stdinfoForm',$tution->id)}}" method="post">

                        @csrf
                        
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputFirstName">Student-Name</label>
                            <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter student name" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for=""> Class</label>
                                <input name="class" class="form-control" id="" type="text" placeholder="Class" value="">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Subject</label>
                                <input name="subject" class="form-control" id="inputLastName" type="text" placeholder="subject" value="">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Parents-Contact</label>
                                <input name="parents_contact" class="form-control" id="inputOrgName" type="text" placeholder="parents_contact" value="">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputemail">Parents-email</label>
                                <input name="parents_email" class="form-control" type="email" id="inputLocation" type="text" placeholder="Enter parents_email" value="">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Address</label>
                            <input name="address" class="form-control" id="inputEmailAddress" type="text" placeholder="Enter your address" value="">
                        </div>
                        <!-- Form Row-->
                        <!-- <div class="row gx-3 mb-3">
                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                            </div>
                           
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                            </div>
                        </div> -->
                        <!-- Save changes button-->
                        <button class="btn btn-success" type="submit">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>




</div>
@endsection