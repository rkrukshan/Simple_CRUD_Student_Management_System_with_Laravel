@extends('layouts.mainlayout')
@section('navigation')
<table>
<form action="{{ route('house.update',$houses) }}" method="POST">
    @csrf
    @method('put')
    <td>House Name<input type="text" value="{{ $houses->house_name }}" cl></td><br>
    <td>House Order<input type="text" value="{{ $houses->house_order }}" cl></td><br>
</form>
</table>
@endsection
