@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update') }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <label for="subject_name">Subject name<td>Subject Name</label></td>
        <label for="subject_name">Subject index<td>Subject Index</label></td>
        <label for="subject_name">Subject order<td>Subject Index</label></td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
<button type="submit" class="btn btn-primary"><a href="{{ route('subject.index') }}">Back</button></a>

</form>
</center>
@endsection
