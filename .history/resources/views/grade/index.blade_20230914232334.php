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
<table class="table table-striped" border="1">
    <tr>
    <thead class="table-dark">
        <th>Grade Group</th>
        <th>Grade Name</th>
        <th>Grade Order</th>
        <th>Action</th>
    </thead>
</tr>
@foreach ($grades as $grade)

    <tr>
    <td>{{ $grade->grade_group }}</td>
    <td>{{ $grade->grade_name }}</td>
    <td>{{ $grade->grade_order }}</td>
    <form action="{{ route('grade.destroy',$grade) }}">
        @csrf
        @method('delete')
        <td><a href="{{ route('grade.show',$grade) }}"></a><button type="submit" class="btn btn-outline-info">show</button></td>
       <a href="{{ route('grade.show',$grade) }}"></a><button type="submit" class="btn btn-outline-info">show</button></td>
        <a href="{{ route('grade.show',$grade) }}"></a><button type="submit" class="btn btn-outline-info">show</button></td>
    </form>
</tr>

@endforeach
</table>
</body>
</html>
@endsection
