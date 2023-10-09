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
<button class=""><a class="{{ route('subject.index') }}">Subject</a></button>
</center>
</body>
@endsection
