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
<center>

    <form action=" {{ route('grade.update',$grades) }}" class="form" method="POST">
        @csrf
        @method('put')
        <table class="=table">
            <>
            <label for="grade_group">Grade Group</label><input type="text" name="grade_group" class="form-control" value="{{ $grades->grade_group }}"><br>
            @if($errors->has('grade_group'))
                    <div class="alert alert-danger">
                        <strong style="color: red">{{ $errors->first('grade_group') }}</strong>
                    </div>
                    @endif

            <label for="grade_name">Grade Name</label><input type="text" name="grade_name" class="form-control" value="{{ $grades->grade_name }}"><br>
            @if($errors->has('grade_name'))
                    <div class="alert alert-danger">
                        <strong style="color: red">{{ $errors->first('grade_name') }}</strong>
                    </div>
                    @endif
            <label for="grade_order">Grade Order</label><input type="text" name="grade_order" class="form-control" value="{{ $grades->grade_order }}"><br>
            @if($errors->has('grade_order'))
                    <div class="alert alert-danger">
                        <strong style="color: red">{{ $errors->first('grade_order') }}</strong>
                    </div>
                    
           <center>
            <a class="link-light"><button type="submit" class="btn btn-success btn-lg">Save</button></a>
            <button type="submit" name="" id="" class="btn btn-secondary btn-lg" value="Back"><a class="link-light" href="{{ route('student.index') }}">Back</a></button>
        </center>
        </table>
    </form>
</center>
</body>
</html>
@endsection
