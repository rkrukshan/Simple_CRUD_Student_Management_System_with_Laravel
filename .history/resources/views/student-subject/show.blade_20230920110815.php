@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Student ID</th>
    <th class="thead-dark">Subject ID</th>
    </tr>
    <>
        <td>{{ $students->id }}</td>



        @foreach ($subjects as $subject)
    <td>{{ $subject->subject_id }}</td>
@endforeach
     </tr>
</table>
</center>
</body>
@endsection
