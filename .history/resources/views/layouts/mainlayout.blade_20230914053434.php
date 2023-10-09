<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="js/bootsrtap.js"></script>
    <script src="js/bootsrtap.min.js"></script>


    <title>Document</title>
</head>

<body style="lienear-gradient:#7699ae,#00ff0d;">
    <table border="1" class="table">
        <td>
            <h1><a href="{{ route('student.index') }}">Student</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="{{ route('subject.index') }}">Subject</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="{{ route('house.index') }}">House</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="{{ route('grade.index') }}">Grade</a></h1>
        </td>
        <td>@yield('navigation')</td>
    </table>
</body>

</html>
