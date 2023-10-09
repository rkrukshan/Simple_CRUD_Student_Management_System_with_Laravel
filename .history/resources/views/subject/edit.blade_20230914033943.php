@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <label for="subject_name">Subject name</label><td>{{ $subjects->subject_name }}</td><br>
        <label for="subject_name">Subject index</label><td>{{ $subjects->subject_index }}</td><br>
        <label for="subject_name">Subject order</label><td>{{ $subjects->subject_order }}</td><br>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
