@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<center>

    <body>
        <form action=" {{ route('grade.store') }}" class="form" method="POST">
            @csrf
            <table class="=table">
                <center>
                    <label for="grade_group">Grade Group</label></td><input type="text" name="grade_group"class="form-control"><br>
                    @if($errors->has('grade_group'))
                    <div class="alert alert-danger"></div>
                    @endif
                    <label for="grade_name">Grade Name</label><input type="text" name="grade_name"class="form-control"><br>
                    <label for="grade_order">Grade Order</label><input type="text" name="grade_order"class="form-control"><br>
                    <center><a class="link-light"><button type="submit" class="btn btn-success">save</button></a>
                        <button type="button" class="btn btn-secondary"><a class="link-light"
                                href="{{ route('grade.index') }}">Back</a></button>
                    </center>

                </center>
            </table>
        </form>
    </body>

</center>

</html>
@endsection
