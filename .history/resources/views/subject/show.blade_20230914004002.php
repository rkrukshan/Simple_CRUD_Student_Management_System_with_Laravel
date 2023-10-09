@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td><label for="subject_"><input type="text"></label></td>
    <td><label for=""><input type="text"></label></td>
    <td><label for=""><input type="text"></label></td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
