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
<form action=" {{ route('grade.update',$grades  ) }}" class="form" method="POST">
    @csrf
    @method('put')
    <table class="=table">
        <center>
        <label for="grade_group">Grade Group</label><input type="text" name="grade_group" class="form-control" value="{{ $grades->grade_group }}"><br>
        <label for="grade_name">Grade Name</label><input type="text" name="grade_name" class="form-control" value="{{ $grades->grade_name }}"><br>
        <label for="grade_order">Grade Order</label><input type="text" name="grade_order" class="form-control" value="{{ $grades->grade_order }}"><br>
       <center><a class="link-light"><button type="submit" class="btn-success btn-lg">Save</button></a>
        <button type="submit" name="" id="" class="btn-secondary btn-lg" value="Back"><a class="link-light" href="{{ route('student.index') }}">Back</a></button></center>
    </center>
    </table>
</form>
</body>
</html>
@endsection
