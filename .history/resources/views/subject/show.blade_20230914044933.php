@extends('layouts.mainlayout')
@section('navigation')
<table class="table">
    <label for="subject_name">subject name</label><input type="text" name="subject_name" value="{{ $subjects->subject_name }}" class="form-control"><br>
    <label for="subject_index">subject name</label><input type="text" name="subject_index" value="{{ $subjects->subject_index }}" class="form-control"><br>
    <label for="subject_order">subject name</label><input type="text" name="subject_order" value="{{ $subjects->subject_order }}" class="form-control"><br>

    <center><a class="link-light" href="{{ route('subject.index') }}" ><button type="submit" class="btn btn-success">Back</button></a></center><br>


</table>
@endsection
