@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Student ID</th>
    <th class="thead-dark">Subject ID</th>
    </tr>
    <tr>
        <td>{{ $subjects->subject_id }}</td>
        <td>{{ $students->subject_name }}</td>
     </tr>
</table>
</center>
</body>
@endsection
