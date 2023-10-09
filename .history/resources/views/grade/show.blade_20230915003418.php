@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <center>
    <td><lable>Grade Group</lable><input type="text" value="{{ $grades->grade_group }}"></td><br>
    <td><lable>Grade Name</lable><input type="text" value="{{ $grades->grade_name }}"></td><br>
    <td><lable>Grade Order</lable><input type="text" value="{{ $grades->grade_order }}"></td><br>
    <center><button class="btn btn-success"><a href="{{ route('grade.index') }}"></a></button></center>
</table>
@endsection
