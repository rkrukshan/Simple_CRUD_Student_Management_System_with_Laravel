@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <label for="subject_name">Subject name</label><td>{{ $students->subject_name }}</td>
        <label for="subject_name">Subject index</label><td>{{ $students->subject_index }}</td>
        <label for="subject_name">Subject order</label><td>{{ $students->subject_order }}</td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
