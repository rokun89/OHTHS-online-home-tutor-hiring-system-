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
      <th scope="col">Name</th>
      
      <th scope="col">Class</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sub as $key=> $data)

    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      
      <td>{{$data->class}}</td>
      
      
      
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