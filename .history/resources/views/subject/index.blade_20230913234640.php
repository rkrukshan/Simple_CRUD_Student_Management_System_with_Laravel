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
<table class="table">
    <tr>
        <td>Subject Name</td>
        <td>Subject Index</td>
        <td>Subject Order</td>
        <td>Action</td>
    </tr>
    @foreach ($subjects as $subject)
        <td>{{ $subject->sub }}</td>
        <td>{{ $subject->sub }}</td>
        <td>{{ $subject->sub }}</td>
        <td></td>
        <td></td>
        <td></td>
    @endforeach
</table>
</body>
</html>
@endsection
