@extends('layouts.mainlayout')
@section('navigation')
<table class="table">
    <label for="subject_name">subject name</label><input type="text" name="subject_name" value="{{ $subjects->subject_name }}" class="form-control"><br>
    <label for="subject_index">subject name</label><input type="text" name="subject_index" value="{{ $subjects->subject_index }}" class="form-control"><br>
    <label for="subject_order">subject name</label><input type="text" name="subject_order" value="{{ $subjects->subject_order }}" class="form-control"><br>

    <center><button class="btn btn-success"><a href="{{ route('subject.index') }}" ></a>Back</button></center><br>
</table>
@endsection
