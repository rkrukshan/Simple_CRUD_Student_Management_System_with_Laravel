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
    <tr>
        <td>{{ $subject->subject_name }}</td>
        <td>{{ $subject->subject_index }}</td>
        <td>{{ $subject->subject_order }}</td>
        <form action="{{ route('subject.destroy') }}"></form>
        <td><button type="button" class="btn btn-info btn-lg"><a href="{{ route('subject.show') }}"></a>show</button></td>
        <td><button type="button" class="btn btn-warning btn-lg"><a href="{{ route('subject.edit,subjects') }}"></a>edit</button></td>
        <td><button type="button" class="btn btn-danger btn-lg"><a href="{{ route('subject.destroy,subjects') }}"></a>delete</button></td>
    </tr>
    @endforeach
</table>
</body>
</html>
@endsection
