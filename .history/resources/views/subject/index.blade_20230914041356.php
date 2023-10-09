@extends('layouts.mainlayout')
@section('navigation')
    <center>
        <button type="submit" class="btn btn-primary"><a class="btn btn-primary btn-lg" href="{{ route('subject.create') }}">Create</button></a>

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
            <td><button type="submit" class="btn btn-info"><a href="{{ route('subject.show',$subject) }}">show</button></a></td>
            <td><button type="submit" class="btn btn-warning"><a href="{{ route('subject.edit',$subject) }}">edit</button></a></td>
            <td><button type="submit" class="btn-danger"><a class="btn btn-danger link-light bt-sm" href="">delete</button></a></td>

    </form>

    </tr>
    @endforeach
</table>
@endsection
