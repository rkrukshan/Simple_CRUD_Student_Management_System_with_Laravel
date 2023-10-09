@extends('layouts.mainlayout')
@section('navigation')
<table class="table">
    <td><label for="subject_name"></label><input type="text" name="subject_name" value="" /td>
    <td><label for="subject_index"></label><input type="text" name="subject_index" value="" ></td>
    <td><label for="subject_order"></label><input type="text" name="subject_order" value="" ></td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
