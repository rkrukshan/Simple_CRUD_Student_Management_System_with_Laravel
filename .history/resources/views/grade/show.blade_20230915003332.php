@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <td><lable>Grade Group</lable><input type="text" value=""></td>
    <td><lable>Grade Name</lable><input type="text" value="">/td>
    <td><lable>Grade Order</lable><input type="text" value=""></td>
    <center><button class="btn btn-success"><a href="{{ route('grade.index') }}"></a></button></center>
</table>
@endsection
