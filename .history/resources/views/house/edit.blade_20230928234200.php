@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
<table>
    <center>
<form action="{{ route('house.update',$houses) }}" method="POST">
    @csrf
    @method('put')
    <label>House Name</label> <input type="text" value="{{ $houses->house_name }}" name="house_name" class="form-control"><br>
    <label>House Order</label><input type="text" value="{{ $houses->house_order }}" name="house_order" class="form-control"><br>
    <center><button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-secondary">Save</button>
    </center>
</form>
</center>
</table>
@endsection
