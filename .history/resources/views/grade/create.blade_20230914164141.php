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
<form action=" {{ route('grade.store') }}" class="table table-s">
        <td><input type="text"><br></td>
        <td><input type="text"><br></td>
        <td><input type="text"><br></td>
        <td><input type="text"><br></td>
    </table>
</form>
</body>
</html>
@endsection
