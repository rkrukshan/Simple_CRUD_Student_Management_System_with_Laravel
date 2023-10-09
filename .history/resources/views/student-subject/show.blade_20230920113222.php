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
        <td>{{ $subject->id }}</td>
        @foreach ($subjects as $subject)

        <td>{{ $subject->subject_name }}</td>


            @method('delete')


</tr>
    @endforeach
</table>
</center>
</body>
@endsection
