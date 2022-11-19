@extends('backend.master')

@section('content')

<a href="{{route('stdpage')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>


@if(session()->has('messages'))

<p class="alert alert-success" {{session()->get('messages')}}></p>

@endif


<!--@if(session()->has('errormsg'))

<p class="alert alert-danger" {{session()->get('errormsg')}}></p>

@endif -->





<h1>Student Table</h1>

@if(Session('message'))
<div> <div class="alert alert-success">{{session('message')}}</div> </div>

@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Images</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Login-Pass</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($test2 as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>

      <td>
      <img width="40px" style="border-radius: 10px" src="{{url('/uploads/'.$data->images)}}" alt="Show-img">
      </td>

      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->login_pass}}</td>
      <td>{{$data->status}}</td>

      <td>
        <a href="{{route('stdInfo.view',$data->id)}}" class="btn btn-primary">view</a>

        <a href="{{route('stdInfo.delete',$data->id)}}" class="btn btn-danger">delete</a>

        <a href="" class="btn btn-warning">edit</a>

    </tr>

    @endforeach
    </tbody>
</table>

{{$test2->links()}}

@endsection