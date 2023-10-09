@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.store') }}" method="POST" class="form">
        @csrf

    <table>
        <label for="subject_name">Subject name</label><input type="text" name="subject_name" class="form-control"<<br>
        <label for="subject_name">Subject index</label><input type="text" name="subject_index" class="form-control"<<br>
        <label for="subject_name">Subject order</label><input type="text" name="subject_order" class="form-control"<<br>

    </table>
    <center></center>
<button type="submit" class="btn btn-success">Save</button>
<button type="submit" class="btn btn-secondary"><a class="link-light" href="{{ route('subject.index') }}">Back</button></a>
</form>
</center>
@endsection
