<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/CSS/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/CSS/bootstrap.min.css')}}">
    <script src="bootstrap//bootsrtap.js"></script>
    <script src="bootstrap//bootsrtap.min.js"></script>


    <title>Document</title>
</head>

<body>
    <table border="1" class="table">
        <td>
            <h1><a href="">Student</a></h1>
            <h1><a href="">Subject</a></h1>
            <h1><a href="">House</a></h1>
            <h1><a href="">Grade</a></h1>
        </td>
        <td>@yield('create')</td>
    </table>
</body>

</html>
