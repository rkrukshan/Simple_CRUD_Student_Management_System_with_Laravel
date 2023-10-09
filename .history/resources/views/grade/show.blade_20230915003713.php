@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <center>
    <lable>Grade Group</lable><br><input type="text" value="{{ $grades->grade_group }}" class="form-control"><br>
    <lable>Grade Name</lable><br><input type="text" value="{{ $grades->grade_name }}" class="form-control"><br>
    <lable>Grade Order</lable><br><input type="text" value="{{ $grades->grade_order }}" class="form-control"><br>
    <center><button class="btn btn-success"><a class="{{ route('grade.index') }}">Save</a></button></center>
</center>
</table>
@endsection
