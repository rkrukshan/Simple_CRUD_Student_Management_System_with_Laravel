@extends('layouts.mainlayout')
@section('navigation')
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
        @
    <lable>House Name</lable><input type="text" name="house_name" class="form-control"><br>
    <lable>House Order</lable><input type="text" name="house_order" class="form-control"><br>
    <button type="submit" class="btn btn-success">Save</button>
    </form>
</center>
</body>
</html>
@endsection
