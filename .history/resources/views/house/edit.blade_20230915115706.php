@extends('layouts.mainlayout')
@section('navigation')
<table>
<form action="{{ route('house.update',$houses) }}" method="POST">
    @csrf
    @method('put')
    <label>House Name</label> <input type="text" value="{{ $houses->house_name }}" class="form-control"><br>
    <label>House Order</label><input type="text" value="{{ $houses->house_order }}" class="form-control"><br>
    center>

</form>
</table>
@endsection
