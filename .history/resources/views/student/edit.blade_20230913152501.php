@extends('layouts.mainlayout')
@section('navigation')
<form action="{{ route('student.update',$students->admision_number); }}" method="POST" class="form">
    @csrf
    @method('put')
    <center>
        <table border="1" class="table">
            <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id=""class="form-control" value="{{ $students->admision_number }}"><br>
            <label for="first_name">first name</label><input type="text" name="first_name" id=""class="form-control" value="{{ $students->first_name }}"><br>
            <label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control" value="{{ $students->last_name }}"><br>
            <label for="gender">gender</label><input type="text" name="gender" id="" class="form-control" value="{{ $students->gender }}"><br>
            <label for="address">Address</label><input type="text" name="address" id="" class="form-control" value="{{ $students->address }}"><br>
            <label for="dob">first dob</label><input type="date" name="dob" id="" class="form-control" value="{{ $students->dob }}"><br>
            <label for="house_id">House Id</label><input type="text" name="house_id" id="form-control"class="form-control" value="{{ $students->house_id }}"><br>
            <label for="grade_id">Grade Id</label><input type="text" name="grade_id" id="form-control"class="form-control" value="{{ $students->grade_id }}"><br>
            <label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control" value="{{ $students->nic }}"><br>
        </table>
    </center>

    <button type="submit" name="" id="" class="btn-success" value="Save">Save</button>
    <a href="http://127.0.0.1:8000/student"> <button type="submit" name="" id="" class="" value="Back">Back</button></a>

</form>
@endsection

