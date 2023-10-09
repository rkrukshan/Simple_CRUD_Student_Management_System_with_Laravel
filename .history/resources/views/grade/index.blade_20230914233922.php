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
    <center><button class="btn btn-primary"><a class="link-light" href=" {{ route('grade.create') }}">Create</a></button></center>
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
<form action="{{ route('grade.destroy',$grade) }}"method="POST">
    @csrf
    @method('delete')
    <tr>
    <td>{{ $grade->grade_group }}</td>
    <td>{{ $grade->grade_name }}</td>
    <td>{{ $grade->grade_order }}</td>


           {{--  <td><button type="submit" class="btn btn-outline-danger">delete</button></td>  --}}
           <td><button type="button" class="btn-outline-info btn-lg"><a href="{{ route('.show',$) }}"
            >show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button type="button" class="btn-outline-warning btn-lg"><a href="{{ route('.edit',$) }}"
           >edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="btn-outline-danger btn-lg" value="save">delete</button></td>

    </form>
    {{--  <td><a href="{{ route('grade.show',$grade) }}"></a><button type="submit" class="btn btn-outline-info">show</button></td>
    <td><a href="{{ route('grade.edit',$grade) }}"></a><button type="submit" class="btn btn-outline-warning">edit</button></td>  --}}
</tr>

@endforeach
</table>
</body>
</html>
@endsection
