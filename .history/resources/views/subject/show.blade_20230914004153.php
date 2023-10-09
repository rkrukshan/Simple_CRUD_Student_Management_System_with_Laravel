@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td><label for="subject_name"><input type="text" name="subject_name">{{ $subjects->subject_name }}</label></td>
    <td><label for="subject_index"><input type="text" name="subject_index">{{ $subjects->subject_index }}</label></td>
    <td><label for="subject_order"><input type="text" name="subject_order">{{ $subjects->subject_name }}</label></td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
