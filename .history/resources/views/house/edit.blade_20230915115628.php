@extends('layouts.mainlayout')
@section('navigation')
<table>
<form action="{{ route('house.update',$houses) }}" method="POST">
    @csrf
    @method('put')
    <label></label> <input type="text" value="{{ $houses->house_name }}" class="form-control"><br>
    <label></label> Name<input type="text" value="{{ $houses->house_order }}" class="form-control"><br>

</form>
</table>
@endsection
