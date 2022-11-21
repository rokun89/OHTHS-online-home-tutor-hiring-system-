@extends('backend.master')

@section('content')

<a href="{{route('tutor.form.page')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>

@if(Session('messages'))

 <div class="alert alert-success">{{session('messages')}}</div>

 @endif

<h1>Tutor Table</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Images</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Subject</th>
      <th scope="col">Salary</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tutor as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>
      <img width="50px" style="border-radius: 10px" src="{{url('/uploads/'.$data->images)}}" alt="click_image">
      </td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->subject}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->status}}</td>
      <td>
        <a href="{{route('view.tutorInfo',$data->id)}}" class="btn btn-primary">view</a>
        <a href="{{route('delete.tutorInfo',$data->id)}}" class="btn btn-danger">delete</a>
        <a href="{{route('tutor.edit',$data->id)}}" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach
  </tbody>
</table>

{{$tutor->links()}}


@endsection