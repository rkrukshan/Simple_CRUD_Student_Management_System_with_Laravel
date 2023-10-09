@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <form action="{{ route('house.store') }}" method="POST">
        @csrf
    <lable>House Name</lable><input type="text" name="house_name" class="form-control"><br>
    @if($errors->has('house_name'))
<div class=""><strong></strong></div>
    @endif
    <lable>House Order</lable><input type="text" name="house_order" class="form-control"><br>
    <button type="submit" class="btn btn-success">Save</button>
    <button type="button" class="btn btn-secondary"><a class="link-light" href="{{ route('house.index') }}">Back</a></button>

    </form>
</center>
</body>
</html>
@endsection
