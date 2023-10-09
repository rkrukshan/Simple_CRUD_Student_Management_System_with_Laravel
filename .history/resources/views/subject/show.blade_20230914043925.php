@extends('layouts.mainlayout')
@section('navigation')
<table class="table" class="form-control"
    <td><label for="subject_name">subject name</label><input type="text" name="subject_name" value="{{ $subjects->subject_name }}" class="form-control"></td><br>
    <td><label for="subject_index">subject index</label><input type="text" name="subject_index" value="{{ $subjects->subject_index }}" class="form-control"></td><br>
    <td><label for="subject_order">subject order</label><input type="text" name="subject_order" value="{{ $subjects->subject_order }}" class="form-control"></td><br>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
