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
        <center>
        <label for="grade_group">grade_group</label></td><input type="text" name="grade_group" class="form-control"><br>
        <label for="grade_name">grade_name</label><input type="text" name="grade_name" class="form-control"><br>
        <label for="grade_order">grade_order</label><input type="text" name="grade_order" class="form-control"><br>
       <center><a class="link-light" href="" class="btn btn-success"><button type="submit" >save</button></center>
    </center>
    </table>
</form>
</body>
</html>
@endsection
