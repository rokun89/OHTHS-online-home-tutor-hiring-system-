@extends('backend.master')

@section('content')


<a href="#">
    <span class="btn btn-success">+Create New Form</span>
</a>



<h1>Parents Request Table</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Student-Name</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Tutor-Name</th>
      <th scope="col">parents-Contact</th>
      <th scope="col">parents-email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
        @foreach($stdinfo as $key=>$list)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$list->student_name}}</td>
      <td>{{$list->class}}</td>
      <td>{{$list->subject}}</td>
      <td>{{$list->tutor->name}}</td>
      <td>{{$list->parent_contact}}</td>
      <td>{{$list->parent_email}}</td>
      <td>{{$list->address}}</td>
      <td>
        <a href="#" class="btn btn-success">accept</a>
        <a href="{{route('tutor.hire.delete',$list->id)}}" class="btn btn-danger">reject</a>

    </tr>

    

    @endforeach
  </tbody>
</table>





{{$stdinfo->links()}}
@endsection