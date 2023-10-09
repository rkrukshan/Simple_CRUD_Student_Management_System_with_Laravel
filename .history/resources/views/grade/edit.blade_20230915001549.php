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
<form action=" {{ route('grade.store',$) }}" class="form" method="POST">
    @csrf
    @method('put')
    <table class="=table">
        <center>
        <label for="grade_group">grade_group</label><input type="text" name="grade_group" class="form-control" value="{{ $grade->grade_group }}"><br>
        <label for="grade_name">grade_name</label><input type="text" name="grade_name" class="form-control" value="{{ $grade->grade_name }}"><br>
        <label for="grade_order">grade_order</label><input type="text" name="grade_order" class="form-control" value="{{ $grade->grade_order }}"><br>
       <center><a class="link-light"><button type="submit" class="btn btn-success">save</button></a></center>
    </center>
    </table>
</form>
</body>
</html>
@endsection
