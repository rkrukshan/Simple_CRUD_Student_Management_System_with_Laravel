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
        <label for="grade_group">grade_group</label></td><input type="text" name="grade_group" class="form-control">grade group</td><br>
        <label for="grade_name">grade_name</label><input type="text" name="grade_name" class="form-control">grade name</td><br>
        <label for="grade_order"></label><input type="text" name="grade_order" class="form-control">grade order</td><br>
       <center><td><button type="submit" ><a href=""></a>save</button><br></td></center>
    </center>
    </table>
</form>
</body>
</html>
@endsection
