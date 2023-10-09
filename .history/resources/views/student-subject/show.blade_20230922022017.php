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


<center>
    <table border="1" class="table table-striped table table-hover table-responsive">
        <tr>
        <th class="thead-dark">Student Name</th>
        <th class="thead-dark">Student ID</th>
        </tr>


            @foreach ($student as $student)
        <tr>
            <td>{{ $student->first_name.last_name }}</td>
            <td>{{ $student->id }}</td>
    </tr>
        @endforeach
    </table>
    <button class="btn btn-secondary"><a class="link-light" href="{{ route('subject.index') }}">Back</a></button>
    </center>



</body>
@endsection