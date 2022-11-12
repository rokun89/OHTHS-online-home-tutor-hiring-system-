@extends('backend.master')

@section('content')


<a href="{{route('create.page')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>

@if(Session('message'))
 <div class="alert alert-success">{{session('message')}}</div> 

@endif

<h1>Parents Table</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">images</th>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">N-ID</th>
      <th scope="col">Login-Pass</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($test as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>
      <img width="40px" style="border-radius: 10px" src="{{url('/uploads/'.$data->images)}}" alt="Show-img">
      </td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->n_id}}</td>
      <td>{{$data->login_pass}}</td>
      <td>{{$data->status}}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">delete</a>
        <a href="" class="btn btn-warning">edit</a>

    </tr>

    

    @endforeach
  </tbody>
</table>

{{$test->links()}}

@endsection