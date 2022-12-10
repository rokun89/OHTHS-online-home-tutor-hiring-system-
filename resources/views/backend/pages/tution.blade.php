@extends('backend.master')

@section('content')


<a href="{{route('tution.form')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>

<h1>Tution List:</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">Title</th>
      <th scope="col">Tutor</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Salary</th>
      <th scope="col">weekend_Days</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($tution as $key=>$data)


    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->tutor->name}}</td>
      <td>{{$data->class->name}}</td>
      <td>{{$data->subject->name}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->weekend_days}}</td>
      <td>
      <a href="{{route('tution.view',$data->id)}}" class="btn btn-primary">view</a>
      <a href="{{route('tution.delete',$data->id)}}" class="btn btn-danger">delete</a>
      <a href="{{route('tution.edit',$data->id)}}" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach

  </tbody>
  
</table>



@endsection