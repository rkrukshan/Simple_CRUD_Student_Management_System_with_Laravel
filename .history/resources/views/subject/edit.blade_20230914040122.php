@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
        @<center>
   <lable>Subject Name</lable><input type="text" name="subject_name" class="form-group"><br>
   <lable>Subject Index</lable><input type="text" name="subject_index" class="form-group"><br>
   <lable>Subject Order</lable><input type="text" name="subject_order" class="form-group"><br>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
