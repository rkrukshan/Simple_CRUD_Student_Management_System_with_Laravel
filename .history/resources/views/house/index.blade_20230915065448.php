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
<table class="table table-striped table-hover">
    <tr>
        <thead class="table-dark">
            <th>House Name</th>
            <th>House Order</th>
        </thead>
    </tr>
    <tr>
        @foreach ($houses as $house)
        <td>{{ $houses }}</td>
        <td>{{ $houses }}</td>
        <td></td>
        <td></td>
        <td></td>
        @endforeach
    </tr>
</table>
</body>
</html>
@endsection
