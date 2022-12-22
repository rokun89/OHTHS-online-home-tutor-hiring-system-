@extends('frontend.master')

@section('content')
<div style="padding-top: 60px;">



<style>
    .col-xl-8{
        margin-left: 10%;
    }
    .card-header{
        background-color: DarkSeaGreen;
    }
    .card-body{
        background-color: DarkSeaGreen;
    }
</style>


<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-8" style="padding-left:200px ;">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header"><b><h3>Tuition Info </h3></b></div>
                <div class="card-body">

<form action="{{route('tuition.post.store')}}" method="post">
        
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
    <input required type="text"  class="form-control" name="title" id="" cols="" rows="" placeholder="Enter Your Title Here"></textarea>
    </div>
    <div class="form-row">
    
    <div class="form-group col-md-6">
        <label for="class">Class</label>

        <select required name="class" id="class" class="form-control">
            @foreach($cls as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">

    <label for="subject">Subject</label>

    <select required name="subject" id="class" class="form-control">
        @foreach($sub as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
    </select>
    </div>
    <div class="form-group col-md-6">
        <label for="salary">Salary:</label>
    <input required name="salary" type="number" class="form-control" id="inputAddress2" placeholder="salary">
    </div>
    <div class="form-group col-md-6">
        <label for="days">Number of days in per week:</label>
    <input required name="days" type="number" class="form-control" id="inputAddress2" placeholder="Number of days in per week">
    </div>
    
    </div>
    
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

                </div>
            </div>
        </div>
    </div>
 </div>








</div>
@endsection