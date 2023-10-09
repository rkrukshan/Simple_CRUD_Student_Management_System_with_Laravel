@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Student ID</th>
    <th class="thead-dark">Subject ID</th>
    </tr>
        <td>{{ $students->id }}</td>

        @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subjects->subject_name }}</td>

        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td><button type="button" class="btn btn-outline-info btn-lg"><a href="{{ route('subject.show',$subject) }}">show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-outline-warning btn-lg"><a href="{{ route('subject.edit',$subject) }}">edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-danger btn-lg">delete</a></button></td>
    </form>
</tr>
    @endforeach
</table>
</center>
</body>
@endsection
