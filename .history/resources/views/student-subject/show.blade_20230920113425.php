@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Student ID</th>
    <th class="thead-dark">Subject ID</th>
    </tr>


        @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->subject_order }}</td>


            @method('delete')
        <td>{{ $subject->id }}</td>

</tr>
    @endforeach
</table>
</center>
</body>
@endsection
