@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table class="table">
        <td>
            <lable>Subject Name</lable><input type="text" name="subject_name" cla><br>
            <lable>Subject Index</lable><input type="text" name="subject_index" cla><br>
            <lable>Subject Order</lable><input type="text" name="subject_order" cla><br>

        </td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
