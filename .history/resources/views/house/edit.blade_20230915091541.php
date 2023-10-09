@extends('layouts.mainlayout')
@section('navigation')
<table>
<form action="{{ route('house.update'),$houses }}" method="POST">
    @csrf
    @method('')
    <td><input type="text" value="{{ $houses->house_name }}"></td><br>
    <td><input type="text" value="{{ $houses->house_order }}"></td><br>
</form>
</table>
@endsection
