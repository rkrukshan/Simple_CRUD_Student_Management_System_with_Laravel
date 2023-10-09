@extends('layouts.mainlayout')
<table class="table">
<label for="admision_number">   </label><input type="text" name="admision_number" id="" class="form-control" value="{{ $students->admision_number }}">
<label for="first_name">first name</label><input type="text" name="first_name" id="" class="form-control" value="{{ $students->first_name }}">
<label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control" value="{{ $students->last_name }}">
<label for="gender">gender</label><input type="text" name="gender" id="" class="form-control" value="{{ $students->gender }}">
<label for="address">Address</label><input type="text" name="address" id="" class="form-control" value="{{ $students->address }}">
<label for="dob">first dob</label><input type="date" name="dob" id="" class="form-control" value="{{ $students->house_id }}">
<label for="group_id">Group Id</label><input type="text" name="group_id" id="" class="form-control" value="{{ $students->group_id }}">
<label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control" value="{{ $students->nic }}">
</table>
