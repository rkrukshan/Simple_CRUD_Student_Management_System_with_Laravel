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
<table class="table table-light table-striped" border="1">
    <tr>
        <thead class="table-dark">
        <td>Subject Name</td>
        <td>Subject Index</td>
        <td>Subject Order</td>
        <td>Action</td>
    </thead>
    </tr>
    @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_index }}</td>
        <td>{{ $subject->subject_order }}</td>


        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td><button type="submit" class="btn btn-info"><a class="link-light" href="{{ route('subject.show',$subject) }}">show</button></a>&ns
                <button type="submit" class="btn btn-warning"><a class="link-light" href="{{ route('subject.edit',$subject) }}">edit</button></a>
            <button type="submit" class="btn btn-danger">delete</button></a></td>
        </tr>

    </form>

    @endforeach
</table>
@endsection
