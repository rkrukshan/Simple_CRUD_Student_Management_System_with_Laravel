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
        <td>{{ $subject->subject_name }}</td>
        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td><button type="submit" class="btn btn-info btn-lg"><a href="{{ route('subject.show',$subject) }}"></a>show</button></td>
        <td><button type="submit" class="btn btn-warning btn-lg"><a href="{{ route('subject.edit',$subject) }}"></a>edit</button></td>
        <td><button type="submit" class="btn btn-danger btn-lg"><a href="{{ route('subject.destroy',$subject) }}"></a>delete</button></td>
    </form>
    </tr>
    @endforeach
</table>
@endsection