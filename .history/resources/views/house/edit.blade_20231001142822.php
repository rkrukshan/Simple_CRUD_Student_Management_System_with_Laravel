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
    @if($errors->has('house_name'))
<div class="alert alert-danger">
    <strong style="color: red">
        <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
        {{ $errors->first('house_name') }}
    &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
    </strong>
</div>
    @endif

    <label>House Order</label><input type="text" value="{{ $houses->house_order }}" name="house_order" class="form-control"><br>
    @if($errors->has('house_order'))
    <div class="alert alert-danger">
        <strong style="color: red">
        <i class="fa fa-warning" style="color: #000000;"></i>&nbsp;&nbsp;&nbsp;
        {{ $errors->first('house_order') }}
    &nbsp;&nbsp;&nbsp;<i class="fa fa-warning" style="color: #000000;"></i>
    </strong>
    </div>
    @endif

    <center>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-secondary"><a class="link-light" href="{{ route('house.index') }}">Back</a></button>


    </center>
</form>
</center>
</table>
@endsection
