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
    <form action="{{ route('subject.store') }}"></form>
</body>
<lable for="subject_name">subject name<input type="text" name="subject_name" class="form-control"></label><br>
<label for="Subject_index">Subject index<input type="text" name="Subject_index" class="form-control"></label><br>
<label for="Subject_order">Subject order<input type="text" name="Subject_order" class="form-control"></label><br>
</html>
@endsection
