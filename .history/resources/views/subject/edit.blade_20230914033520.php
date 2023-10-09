@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <label for="subject_name">Subject name<td>Subject Name</td>
        <label for="subject_name">Subject index<td>Subject Index</td>
        <label for="subject_name">Subject order<td>Subject Order</td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
