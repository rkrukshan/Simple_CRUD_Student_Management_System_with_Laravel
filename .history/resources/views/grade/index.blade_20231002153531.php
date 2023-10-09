@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
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
<br>
<br>
<br>
    <center><button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i><a class="link-light" href=" {{ route('grade.create') }}">Create</a></button></center><br>
    <br>
    <br>

<table class="table table-striped table table-hover table-responsive">
    <tr>
    <thead class="table-dark">
        <th>Grade Group</th>
        <th>Grade Name</th>
        <th>Grade Order</th>
        <th>Action</th>
    </thead>
</tr>

@foreach ($grades as $grade)

<form action="{{ route('grade.destroy',$grade) }}"method="POST">
    <tr>
    @csrf
    @method('delete')

    <td>{{ $grade->grade_group }}</td>
    <td>{{ $grade->grade_name }}</td>
    <td>{{ $grade->grade_order }}</td>

    <td><a href="{{ route('grade.show',$grade) }}"><button type="button" class="btn btn-outline-info btn-lg"><i class="fa fa-eye"></i>show</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{ route('grade.edit',$grade) }}"><button type="button" class="btn btn-outline-warning btn-lg"><i class="fa fa-pencil"></i>edit</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-danger btn-lg"><i class="fa fa-trash"></i>delete</button></td>







    </form>


</tr>

@endforeach
</table>
{{ $grades->links() }}
</body>
</html>
@endsection
