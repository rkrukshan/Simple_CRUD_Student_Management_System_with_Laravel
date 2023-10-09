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
    <center><button><a href="{{ route('house.index') }}">Create</button></a></center>
<table class="table table-striped table-hover">
    <tr>
        <thead class="table-dark">
            <th>House Name</th>
            <th>House Order</th>
            <th>Action</th>
        </thead>
    </tr>
    <tr>
        @foreach ($houses as $house)
        <td>{{ $house->house_name }}</td>
        <td>{{ $house->house_order }}</td>
        <form action="{{ route('house.destroy',$house) }}" method="POST">
            @csrf
            @method('delete')
        <td><button type="button"><a href="{{ route('house.show',) }}">show</a></button>
        <button type="button"><a href="{{ route('house.edit',) }}">edit</a></button>
        <button type="submit"></button></td>
    </form>
        @endforeach
    </tr>
</table>
</body>
</html>
@endsection
