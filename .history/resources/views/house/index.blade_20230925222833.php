@extends('layouts.mainlayout')
@extends('layouts.app')

@section('navigation')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <center><button class="btn btn-primary"><a class="link-light" href=" {{ route('house.create') }}">Create</a></button></center>
    <br>
    <br>
    <br>
<table class="table table-striped table table-hover table-responsive">
    <tr>
        <thead class="table-dark">
            <th>House Name</th>
            <th>House Order</th>
            <th>Action</th>
        </thead>
    </tr>

        @foreach ($houses as $house)
        <tr>
        <td>{{ $house->house_name }}</td>
        <td>{{ $house->house_order }}</td>
        <form action="{{ route('house.destroy',$house) }}" method="POST">
            @csrf
            @method('delete')
        <td><button type="button" class="btn btn-outline-info btn-lg"><a href="{{ route('house.show',$house) }}">show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-outline-warning btn-lg"><a href="{{ route('house.edit',$house) }}">edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-outline-danger btn-lg">delete</button></td>
    </form>
</tr>
        @endforeach

</table>
</body>
</html>
@endsection
