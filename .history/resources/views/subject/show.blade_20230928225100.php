@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
<table class="table">
    <center>
    <label for="subject_name">Subject Name</label><input type="text" name="subject_name" value="{{ $subjects->subject_name }}" class="form-control" readonly><br>

    <label for="subject_index">Subject Index</label><input type="text" name="subject_index" value="{{ $subjects->subject_index }}" class="form-control" readonly><br>

    <label for="subject_order">Subject Order</label><input type="text" name="subject_order" value="{{ $subjects->subject_order }}" class="form-control" readonly><br>

    <center><a class="link-light" href="{{ route('subject.index') }}" ><button type="submit" class="btn btn-secondary">Back</button></a></center><br>

</center>
</table>
@endsection
