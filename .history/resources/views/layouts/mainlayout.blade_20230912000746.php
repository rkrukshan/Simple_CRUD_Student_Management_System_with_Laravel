<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="js/bootsrtap.js"></script>
    <script src="js/bootsrtap.min.js"></script>


    <title>Document</title>
</head>

<body>
    <table border="1" class="table">
        <td>
            <h1><a href="http://127.0.0.1:8000/student/create">Student</a></h1>
            <h1><a href="http://127.0.0.1:8000/student/create">Subject</a></h1>
            <h1><a href="http://127.0.0.1:8000/student/create">House</a></h1>
            <h1><a href="http://127.0.0.1:8000/student/create">Grade</a></h1>
        </td>
        <td>@yield('create')</td>
    </table>
</body>

</html>
