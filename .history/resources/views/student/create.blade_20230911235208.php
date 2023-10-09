@extends('layouts.mainlayout')
@extends('layouts.bootstrap')
@section('create')
<form action="{{ route('student.store') }}" method="POST" class="form">
    @csrf
    <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id="" class="form-control-lg"><br>
    <label for="first_name">first name</label><input type="text" name="first_name" id="" class="control-lg"><br>
    <label for="last_name">last name</label><input type="text" name="last_name" id="" class="control-lg"><br>
    <label for="gender">gender</label><input type="text" name="gender" id="" class="control-lg"><br>
    <label for="address">Address</label><input type="text" name="address" id="" class="control-lg"><br>
    <label for="dob">first dob</label><input type="date" name="dob" id="" class="control-lg"><br>
    <label for="house_id">House Id</label><input type="text" name="house_id" id="control-lg" class="control-lg"><br>
    <label for="grade_id">Grade Id</label><input type="text" name="grade_id" id="control-lg" class="control-lg"><br>
    <label for="nic">NIC</label><input type="text" name="nic" id="" class="control-lg"><br>


    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    <button type="submit" name="" id="" class="btn-success" value="Save" >Save</button>
   <a href="http://127.0.0.1:8000/student"> <button type="submit" name="" id="" class="" value="Back" >Back</button></a>

</form>
@endsection
