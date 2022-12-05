@extends('backend.master')

@section('content')


<a href="{{route('create.page')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>



<h1>Parents Table</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">images</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($test as $key=>$data)

    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>
      <img width="40px" style="border-radius: 10px" src="{{url('/uploads/'.$data->images)}}" alt="Show-img">
      </td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>
        <a href="{{route('parentsInfo.view',$data->id)}}" class="btn btn-primary">view</a>
        <a href="{{route('parentsInfo.delete',$data->id)}}" class="btn btn-danger">delete</a>
        <a href="{{route('parents.edit',$data->id)}}" class="btn btn-warning">edit</a>

    </tr>

    

    @endforeach
  </tbody>
</table>

{{$test->links()}}

@endsection