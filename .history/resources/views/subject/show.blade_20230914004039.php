@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td><label for="subject_name"><input type="text" nam></label></td>
    <td><label for="subject_index"><input type="text" nam></label></td>
    <td><label for="subject_order"><input type="text" nam></label></td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
