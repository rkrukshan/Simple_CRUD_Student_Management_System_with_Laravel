@extends('layouts.mainlayout')
@section('navigation')
    <center>
        <button type="submit" class="btn btn-primary"><a href="{{ route('subject.create') }}">Create</button></a>

    </center>
<table class="table">
    <tr>
        <td>Subject Name</td>
        <td>Subject Index</td>
        <td>Subject Order</td>
        <td>Action</td>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_index }}</td>
        <td>{{ $subject->subject_order }}</td>
        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td><button type="submit" class="btn btn-danger btn-lg">delete</button></td>
    </form>
    </tr>
    @endforeach
</table>
@endsection
