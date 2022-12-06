@extends('backend.master')

@section('content')


<a href="{{route('cls.page')}}">
    <button class="btn btn-success">+Create a new form</button>
</a>

<h1>Class Table:</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cls as $key=> $data)

    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>

      
      
      
      <td>
        <a href="#" class="btn btn-primary">view</a>
        <a href="{{route('cls.delete',$data->id)}}" class="btn btn-danger">delete</a>
        <a href="#" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach
  </tbody>
</table>




@endsection