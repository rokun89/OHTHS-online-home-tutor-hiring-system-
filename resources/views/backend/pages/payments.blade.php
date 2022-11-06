@extends('backend.master')

@section('content')


<a href="{{route('payments.form')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>

@if(Session('message'))

 <div class="alert alert-success">{{session('message')}}</div>
 
 @endif 

<h1>Payments Table</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Payment-date</th>
      <th scope="col">Parents/students-name</th>
      <th scope="col">Parents/students-contact</th>
      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($payment as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->payment_date}}</td>
      <td>{{$data->parent_student_name}}</td>
      <td>{{$data->parent_student_contact}}</td>
      <td>{{$data->payment_amount}}</td>
      
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">delete</a>
        <a href="" class="btn btn-warning">edit</a>

    </tr>

    
    @endforeach
  </tbody>
</table>


@endsection