
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .col-xl-8{
        margin-left: 10%;
    }
    .card-header{
        background-color: whitesmoke;
    }
    .card-body{
        background-color: whitesmoke;
    }
</style>


<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-8" style="padding-left:200px ;">
            <div class="card mb-4">
                <div class="card-header"><b><h3>Tuition Info </h3></b></div>
                <div class="card-body">

<form action="{{route('tutor.tuition.update',$Tuitionedit->id)}}" method="post">
     @method('put')   
    @csrf

    <div class="form-group">
        <label for="title">Title:</label>
     <input required type="text"  class="form-control" name="title" id="" cols="" rows="" placeholder="Enter Your Title Here" value="{{$Tuitionedit->title}}"></textarea>
    </div> 

    <div class="form-row">
     <div class="form-group col-md-6">
     <label for="class">Tutor Name: {{$Tuitionedit->tutor->name}}</label>
     <input required type="text" readonly class="form-control" name="name" id="" cols="" rows="" placeholder="Enter Your name Here" value="{{$Tuitionedit->tutor->id}}">
    </div>

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
     <input required name="salary" type="number" class="form-control" id="inputAddress2" placeholder="salary" value="{{$Tuitionedit->salary}}">
    </div>

    <div class="form-group col-md-6">
        <label for="days">Number of days in per week:</label>
     <input required name="days" type="number" class="form-control" id="inputAddress2" placeholder="Number of days in per week" value="{{$Tuitionedit->weekend_days}}">
    </div>
    
    </div>
    
    <div>
    <button type="submit" class="btn btn-danger">update</button>
    </div>

</form>

                </div>
            </div>
        </div>
    </div>
 </div>