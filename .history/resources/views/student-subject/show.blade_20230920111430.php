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
        <td>{{ $subjects->subject_name }}</td>

        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td> <td>{{ $students->id }}</td>
    </form>
</tr>
    @endforeach
</table>
</center>
</body>
@endsection
