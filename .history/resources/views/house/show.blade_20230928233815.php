
@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('house.show',$houses) }}" method="POST">
    @csrf
    @method('put')
    <center>
<table class="table table-striped table-hover">
    <lable>House Name<input type="text" class="form-control" value="{{ $houses->house_name }}" readonly><br></lable>
    <lable>House Order<input type="text" class="form-control" value="{{ $houses->house_order }}" readonly><br></lable>
    <button type="button" class="btn btn-secondary"><a class="link-light" href="{{ route('house.index') }}">Back</a></button>
</table>
</center>
</form>
</center>

</body>
</html>
@endsection
