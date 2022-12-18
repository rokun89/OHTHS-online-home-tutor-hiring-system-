<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    section{
        box-sizing: border-box;
        margin: 15%;
        background-color: whitesmoke;
        /* box-shadow: 5px 10px; */
        
    }
</style>

<section>
    <h3 style="margin-left: 40%;">Payments-Form</h3>


 <form action="{{route('fees.submit')}}" method="post">

    @csrf  

 <div class="form-group">
  <label for="inputAddress2">Tutor Name</label>
  <input required name="name" type="text" class="form-control" id="inputAddress2" placeholder="Enter your Name Here">
 </div>
 <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputPassword4">Tutor Contact</label>
    <input required name="contact" type="tel" class="form-control"  placeholder="contact">
  </div>

  <div class="form-group col-md-6">
    <label for="inputPassword4">Tutor Salary</label>
    <input required name="salary" type="number" class="form-control"  placeholder="salary">
  </div>

  <div class="form-group col-md-6">
    <label for="inputPassword4">Amount</label>
    <input required name="amount" type="number" class="form-control" placeholder="BDT">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Dew</label>
    <input required name="dew" type="number" class="form-control"  placeholder="BDT">
  </div>
  <div class="form-group col-md-6">
    <label for="inputCity">Date</label>
    <input required name="date" type="date" class="form-control" id="input date" placeholder="date">
  </div>
 
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

</section>

