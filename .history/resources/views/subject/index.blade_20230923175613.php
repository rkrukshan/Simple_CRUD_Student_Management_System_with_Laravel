@extends('layouts.mainlayout')
@section('navigation')
    <center>
        <br>
        <br>
        <br>
        <button type="submit" class="btn btn-primary"><a class="link-light" href="{{ route('subject.create') }}">Create</button></a>
        <br>
        <br>
        <br>
    </center>
<table class="table table-striped table table-hover table-responsive">
    <tr>
        <thead class="table-dark">
        <td>Subject Name</td>
        <td>Subject Index</td>
        <td>Subject Order</td>
        <td>Student</td>
        <td>Action</td>
    </thead>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->subject_name }}</td>

        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_index }}</td>
        <td>{{ $subject->subject_order }}</td>
        <td><a href="{{ route('student.subject.show',[$subject,0]) }}">Subject</a></td>

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
@endsection
