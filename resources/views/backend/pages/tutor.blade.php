@extends('backend.master')

@section('content')

<a href="{{route('tutor.form.page')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>


<h1>Tutor Table</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tutor as $key=>$data)

    <tr>
      <th scope="row">{{$key + 1}}</th>
      <!-- <td>
      <img width="50px" style="border-radius: 10px" src="{{url('/uploads/'.$data->images)}}" alt="click_image">
      </td> -->
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      
      <td>
      <a href="{{route('view.tutorInfo',$data->id)}}" class="btn btn-primary">view</a>
      <!-- <a href="{{route('delete.tutorInfo',$data->id)}}" class="btn btn-danger">delete</a> -->
      <a href="{{route('tutor.edit',$data->id)}}" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach
  </tbody>
</table>

{{$tutor->links()}}


@endsection