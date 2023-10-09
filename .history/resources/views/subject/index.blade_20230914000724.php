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
    <center>
        <button type="button"><a href="{{ route('subject.create') }}"></a>Create</button>
    </center>
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
        <form action="{{ route('subject.destroy',$subject) }}" method="POST" class="form">
            @csrf
            @method('delete')
        <td><button type="submit" class="btn btn-info btn-lg"><a href="{{ route('subject.show',$subject) }}"></a>show</button></td>
        <td><button type="submit" class="btn btn-warning btn-lg"><a href="{{ route('subject.edit',$subject) }}"></a>edit</button></td>
        <td><button type="submit" class="btn btn-danger btn-lg"><a href="{{ route('subject.destroy',$subject) }}"></a>delete</button></td>
    </form>
    </tr>
    @endforeach
</table>
</body>
</html>
@endsection
