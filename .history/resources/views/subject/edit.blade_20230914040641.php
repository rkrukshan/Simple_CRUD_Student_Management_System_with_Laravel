@extends('layouts.mainlayout')
@section('navigation')


    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
        @method('put')
        <center>
            <table>
   <lable>Subject Name</lable><input type="text" name="subject_name" class="form-control" value="{{ $subjects->subject_name }}"><br>
   <lable>Subject Index</lable><input type="text" name="subject_index" class="form-control" value="{{ $subjects->subject_index }}"><br>
   <lable>Subject Order</lable><input type="text" name="subject_order" class="form-control" value="{{ $subjects->subject_order }}"><br>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</table>
</form>
</center>
@endsection
