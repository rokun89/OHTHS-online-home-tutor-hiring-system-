@extends('backend.master')

@section('content')




<form action="{{route('report.search')}}" method="get">


<div class="row">
    <div class="col-md-4">
        <label for="">From date:</label>
        <input required name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-4">
        <label for="">To date:</label>
        <input required name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</div>

</form>
<hr>

<div id="hireReport">

<h1>Hiring Reports- {{date('Y-m-d')}}</h1>
    <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">id</th>
      <th scope="col">Student-Name</th>
      <th scope="col">Tutor-Name</th>
      <th scope="col">Parents-name</th>
      <th scope="col">Parents-Address</th>
      <th scope="col">Hiring-Date</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($hires))
        @foreach($hires as $key=>$list)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$list->student_name}}</td>
            <td>{{$list->tutor->name}}</td>
            <td>{{$list->parent->name}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->created_at}}</td>

        </tr>
        @endforeach
        @endif
        
        </tbody>
    </table>
</div>
<button onclick="printDiv('hireReport')" class="btn btn-success">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>



@endsection