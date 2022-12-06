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
      <th scope="col">Tuto_Id</th>
      <th scope="col">Class_Id</th>
      <th scope="col">Subject_Id</th>
      <th scope="col">Salary</th>
      <th scope="col">weekend_Days</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
      <a href="#" class="btn btn-primary">view</a>
      <a href="#" class="btn btn-danger">delete</a>
      <a href="#" class="btn btn-warning">edit</a>

    </tr>

    
    

  </tbody>
  
</table>



@endsection