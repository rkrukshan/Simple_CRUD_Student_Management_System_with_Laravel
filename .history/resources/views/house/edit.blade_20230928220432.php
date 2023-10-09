@extends('layouts.app')
@section('navigation')
<table>
<form action="{{ route('house.update',$houses) }}" method="POST">
    @csrf
    @method('put')
    <label>House Name</label> <input type="text" value="{{ $houses->house_name }}" name="house_name" class="form-control"><br>
    <label>House Order</label><input type="text" value="{{ $houses->house_order }}" name="house_order" class="form-control"><br>
    <center><button type="submit" class="btn btn-success">Save</button></center>

</form>
</table>
@endsection
