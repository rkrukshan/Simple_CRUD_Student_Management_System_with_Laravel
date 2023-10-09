@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <center>
    <lable>Grade Group</lable><br><input type="text" value="{{ $grades->grade_group }}" class="form-control" readonly><br>
    <lable>Grade Name</lable><br><input type="text" value="{{ $grades->grade_name }}" class="form-control" readonly><br>
    <lable>Grade Order</lable><br><input type="text" value="{{ $grades->grade_order }}" class="form-control" readonly><br>
    <center><button class="btn btn-secondary"><a class="link-light" href="{{ route('grade.index') }}">Back</a></button></center>
</center>
</table>
@endsection
