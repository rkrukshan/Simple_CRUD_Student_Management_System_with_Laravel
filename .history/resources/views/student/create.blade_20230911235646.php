@extends('layouts.mainlayout')
@extends('layouts.bootstrap')
@section('create')
<form action="{{ route('student.store') }}" method="POST" class="form">
    @csrf
    <label for="admision_number">
        <br>Admision Number</label><input type="text" name="admision_number" id="" class="form-control-lg"><br>
    <label for="first_name">
        <br>first name</label><input type="text" name="first_name" id="" class="control-lg"><br>
    <label for="last_name">
        <br>last name</label><input type="text" name="last_name" id="" class="control-lg"><br>
    <label for="gender">
        <br>gender</label><input type="text" name="gender" id="" class="control-lg"><br>
    <label for="address">
        <br>Address</label><input type="text" name="address" id="" class="control-lg"><br>
    <label for="dob">
        <br>first dob</label><input type="date" name="dob" id="" class="control-lg"><br>
    <label for="house_id">
        <br>House Id</label><input type="text" name="house_id" id="control-lg" class="control-lg"><br>
    <label for="grade_id">
        <br>Grade Id</label><input type="text" name="grade_id" id="control-lg" class="control-lg"><br>
    <label for="nic">NIC</label>
    <br><input type="text" name="nic" id="" class="control-lg"><br>


    <button type="submit" name="" id="" class="btn-success" value="Save" >Save</button>
   <a href="http://127.0.0.1:8000/student"> <button type="submit" name="" id="" class="" value="Back" >Back</button></a>

</form>
@endsection
