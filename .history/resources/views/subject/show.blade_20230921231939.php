@extends('layouts.mainlayout')
@section('navigation')
<table class="table">
    <center>
    <label for="subject_name">subject Name</label><input type="text" name="subject_name" value="{{ $subjects->subject_name }}" class="form-control" readonly><br>

    <label for="subject_index">subject Index</label><input type="text" name="subject_index" value="{{ $subjects->subject_index }}" class="form-control" readonly><br>

    <label for="subject_order">subject name</label><input type="text" name="subject_order" value="{{ $subjects->subject_order }}" class="form-control" readonly><br>

    <center><a class="link-light" href="{{ route('subject.index') }}" ><button type="submit" class="btn btn-secondary">Back</button></a></center><br>

</center>
</table>
@endsection
