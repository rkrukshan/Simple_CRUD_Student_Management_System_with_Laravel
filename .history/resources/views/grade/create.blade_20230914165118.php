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
<form action=" {{ route('grade.store') }}" class="form">
    <table class="=table">
        <td><input type="text" name="grade_group">grade group</td><br>
        <td><input type="text" name="grade_name">grade name</td><br>
        <td><input type="text" name="grade_order">grade order</td><br>
        <td><button type="submit" ><a href="save"></a></button><br></td>
    </table>
</form>
</body>
</html>
@endsection
