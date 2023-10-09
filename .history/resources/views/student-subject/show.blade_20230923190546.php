@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Subject Name</th>
    <th class="thead-dark">Student ID</th>
    </tr>


        @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->id }}</td>
</tr>
    @endforeach
</table>
<button class="btn btn-secondary"><a class="link-light" href="{{ route('student.index') }}">Back</a></button>
</center>
<br>
<br>
<br>


<table border="1" class="table table-striped table table-hover table-responsive">

    <td>

            @foreach ($students as $student)
            <tr>
                <center><h5><span  class="badge badge-pill badge-primary">Student Name</span></h5></center><br>
                <center><h5><span for="student" > {{ $student->first_name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $student->last_name }}</span></h5></center>

<label for="student_id"> Id</label><input type="text" name="student_id" id="" class="form-control" value="{{ $student->id }}" readonly>

<label for="admision_number">  admision_number</label><input type="text" name="admision_number" id="" class="form-control" value="{{ $student->admision_number }}" readonly>

<label for="first_name">first name</label><input type="text" name="first_name" id="" class="form-control" value="{{ $student->first_name }}" readonly>

<label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control" value="{{ $student->last_name }}" readonly>

<label for="gender">gender</label><input type="text" name="gender" id="" class="form-control" value="{{ $student->gender }}" readonly>

<label for="address">Address</label><input type="text" name="address" id="" class="form-control" value="{{ $student->address }}" readonly>

<label for="dob">dob</label><input type="date" name="dob" id="" class="form-control" value="{{ $student->dob }}" readonly>

<label for="house_id">House Id</label><input type="text" name="house_id" id="" class="form-control" value="{{ $student->house_id }}" readonly>

<label for="group_id">Group Id</label><input type="text" name="group_id" id="" class="form-control" value="{{ $student->grade_id }}" readonly>

<label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control" value="{{ $student->nic }}" readonly><br>


            </tr>
            @endforeach
            <center><button type="button" class="btn btn-secondary btn-xl"><a href="{{ route('student.index') }}" class="link-light">Back</a></button></center>
    </td>
</table>
</body>
@endsection
