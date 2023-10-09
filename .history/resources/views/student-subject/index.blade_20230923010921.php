@extends('layouts.mainlayout')
@section('navigation')
<!DOCTYPE html>
<html lang="en">

    <table border="1" class="table table-striped table table-hover table-responsive">
        <br>
        <br>
        <br>
        <center><button type="button" class="btn btn-primary"><a href="{{ route('student.create') }}"
                    class="link-light">Create</a></button></center>
        <br>

        <td>

                <tr>
                    <thead class="table-dark">
                        <th>Student Name</th>
                        <th>Student Index</th>
                        <th>Student Order</th>



                    </thead>
                </tr>
                @foreach ($subjects as $subject)
                <tr>
<label for="admision_number">  admision_number</label><input type="text" name="admision_number" id="" class="form-control" value="{{ $subject->admision_number }}" readonly>

<label for="first_name">first name</label><input type="text" name="first_name" id="" class="form-control" value="{{ $subject->first_name }}" readonly>

<label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control" value="{{ $subject->last_name }}" readonly>

<label for="gender">gender</label><input type="text" name="gender" id="" class="form-control" value="{{ $subject->gender }}" readonly>

<label for="address">Address</label><input type="text" name="address" id="" class="form-control" value="{{ $subject->address }}" readonly>

<label for="dob">dob</label><input type="date" name="dob" id="" class="form-control" value="{{ $subject->dob }}" readonly>

<label for="house_id">House Id</label><input type="text" name="house_id" id="" class="form-control" value="{{ $subject->house_id }}" readonly>

<label for="group_id">Group Id</label><input type="text" name="group_id" id="" class="form-control" value="{{ $subject->grade_id }}" readonly>

<label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control" value="{{ $subject->nic }}" readonly><br>

<center><button type="button" class="btn btn-secondary btn-xl"><a href="{{ route('student.index') }}" class="link-light">Back</a></button></center>
                </tr>
                @endforeach
        </td>
    </table>
@endsection
