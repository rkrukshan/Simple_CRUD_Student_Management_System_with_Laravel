@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
        @method('put')
<center>
   <lable>Subject Name</lable><input type="text" name="subject_">
   <lable>Subject Index</lable><input type="text" name="subject_">
   <lable>Subject Order</lable><input type="text" name="subject_">
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
