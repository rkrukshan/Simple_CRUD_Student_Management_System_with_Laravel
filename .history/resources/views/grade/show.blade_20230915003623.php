@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <center>
    <lable>Grade Group</lable><br><input type="text" value="{{ $grades->grade_group }}" class=""><br>
    <lable>Grade Name</lable><br><input type="text" value="{{ $grades->grade_name }}" class=""><br>
    <lable>Grade Order</lable><br><input type="text" value="{{ $grades->grade_order }}" class=""><br>
    <td><center><button class="btn btn-success"><a href="{{ route('grade.index') }}"></a></button></center></td>
</center>
</table>
@endsection
