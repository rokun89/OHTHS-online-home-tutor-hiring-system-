@extends('backend.master')

@section('content')


<a href="{{route('tution.form')}}">
    <span class="btn btn-success">+Create New Form</span>
</a>

<h1>Tution List:</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">Title</th>
      <th scope="col">Tutor-Name</th>
      <th scope="col">Class</th>
      <th scope="col">Subject</th>
      <th scope="col">Salary</th>
      <th scope="col">weekend_Days</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($tution as $key=>$data)


    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$data->title}}</td>
      <td>{{$data->tutor->name}}</td>
      <td>{{$data->class->name}}</td>
      <td>{{$data->subject->name}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->weekend_days}}</td>
      <td>{{$data->location}}</td>
      <td>{{$data->created_at}}</td>
      <td>
      <a href="{{route('tution.view',$data->id)}}" class="btn btn-primary">view</a>

      <!-- <a href="{{route('tution.delete',$data->id)}}" class="btn btn-danger">delete</a> -->

      <a href="{{route('tution.edit',$data->id)}}" class="btn btn-warning">edit</a>
      @if($data->status=='pending')
        <a href="{{route('tuition.post.status.update',$data->id)}}" class="btn btn-success">{{$data->status}}</a>

        <a href="{{route('tuition.post.status.delete',$data->id)}}" class="btn btn-danger">reject</a>
      @endif
    </tr>

    
    @endforeach

  </tbody>
  
</table>



@endsection