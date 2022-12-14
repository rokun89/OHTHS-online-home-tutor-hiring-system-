@extends('backend.master')

@section('content')


<a href="{{route('payments.form')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>



<h1>Payments Table</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Parents-name</th>
      <th scope="col">Parents-contact</th>
      <th scope="col">Amount</th>
      <th scope="col">Dew</th>
      <th scope="col">Payment-date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
    @foreach($pay as $key=>$data)
     <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->contact}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->dew}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->status}}</td>
      <td>
        <a href="" class="btn btn-primary">view</a>
        <a href="" class="btn btn-danger">delete</a>
        <a href="" class="btn btn-warning">edit</a>

     </tr>
    @endforeach 

    
    
  </tbody>
</table>



@endsection