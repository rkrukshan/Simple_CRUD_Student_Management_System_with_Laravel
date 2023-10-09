@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td><lable>Grade Group</lable>{{ $grades->grade_group }}</td>
    <td><lable>Grade Name</lable>{{ $grades->grade_name }}</td>
    <td><lable>Grade Order</lable>{{ $grades->grade_order }}</td>
    <center><button class="btn btn-success"><a href="{{ route('grade.index') }}"></a></button></center>
</table>
@endsection
