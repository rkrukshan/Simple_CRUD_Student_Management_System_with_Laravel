@extends('grade.create')
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
<form action="{{ route('house.show',$houses) }}" method="POST">
<table class="table table-striped">
    <lable>House Name</lable><td>{{ $houses->house_name }}</td><br>
    <lable>House Order</lable><td>{{ $houses->house_order }}</td><br>
</table>
</form>
</body>
</html>
@endsection
