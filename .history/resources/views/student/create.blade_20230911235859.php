@extends('layouts.mainlayout')
@extends('layouts.bootstrap')
@section('create')
<form action="{{ route('student.store') }}" method="POST" class="form">
    @csrf
    <label for="admision_number">Admision Number</label><br><input type="text" name="admision_number" id="" class="form-"><br>
    <label for="first_name">first name</label><br><input type="text" name="first_name" id="" class=""><br>
    <label for="last_name">last name</label><br><input type="text" name="last_name" id="" class=""><br>
    <label for="gender">gender</label><br><input type="text" name="gender" id="" class=""><br>
    <label for="address">Address</label><br><input type="text" name="address" id="" class=""><br>
    <label for="dob">first dob</label><br><input type="date" name="dob" id="" class=""><br>
    <label for="house_id">House Id</label><br><input type="text" name="house_id" id="" class=""><br>
    <label for="grade_id">Grade Id</label><br><input type="text" name="grade_id" id="" class=""><br>
    <label for="nic">NIC</label><br><input type="text" name="nic" id="" class=""><br>


    <button type="submit" name="" id="" class="btn-success" value="Save" >Save</button>
   <a href="http://127.0.0.1:8000/student"> <button type="submit" name="" id="" class="" value="Back" >Back</button></a>

</form>
@endsection
