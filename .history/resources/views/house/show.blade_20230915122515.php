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
<table class="table table-striped table-hover">
    <lable><input type="text"><br></lable>
    <lable><input type="text"><br></lable>
    <button class="btn btn-secondary">a</button>
</table>
</form>
</body>
</html>
@endsection
