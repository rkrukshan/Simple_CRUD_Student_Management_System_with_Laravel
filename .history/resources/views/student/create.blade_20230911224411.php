@extends('layouts.mainlayout')
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id="" class="">
    <label for="first_name">first name</label><input type="text" name="first_name" id="" class="">
    <label for="last_name">last name</label><input type="text" name="last_name" id="" class="">
    <label for="gender">gender</label><input type="text" name="gender" id="" class="">
    <label for="address">Address</label><input type="text" name="address" id="" class="">
    <label for="dob">first dob</label><input type="date" name="dob" id="" class="">
    <label for="house_id">first name</label><input type="text" name="first_name" id="" class="">
    <label for="first_name">first name</label><input type="text" name="first_name" id="" class="">

    <button type="submit" name="" id="" class="" value="Save" >Save</button>
   <a href="http://127.0.0.1:8000/student"> <button type="submit" name="" id="" class="" value="Back" >Back</button></a>

</form>
