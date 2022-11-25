@extends('backend.master')

@section('content')

<a href="{{route('subject.form.page')}}">
<span class="btn btn-success">+Create New Form</span>
</a>


<h1>Subject Table</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tutors-name</th>
      <th scope="col">Subject</th>
      <th scope="col">Class</th>
      <th scope="col">Day</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sub as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->tutor_name}}</td>
      <td>{{$data->subject}}</td>
      <td>{{$data->class}}</td>
      <td>{{$data->day}}</td>
      <td>{{$data->time}}</td>
      
      <td>
        <a href="{{route('view.info',$data->id)}}" class="btn btn-primary">view</a>
        <a href="{{route('delete.info',$data->id)}}" class="btn btn-danger">delete</a>
        <a href="{{route('edit.info',$data)}}" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach
  </tbody>
</table>

    {{$sub->links()}}

@endsection