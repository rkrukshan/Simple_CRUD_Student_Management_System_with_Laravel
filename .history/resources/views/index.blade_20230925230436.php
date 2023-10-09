@extends('layouts.mainlayout')
@con
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>

        </tr>
        <tr>
            <td>
                <div class="container-fluid">
                    <img src="{{asset('/images/1.png')}}" alt="">
                </div>&nbsp;
                <div class=""></div>
            </td>
            <td><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="jumbotron">
                    <h1 class="display-4">Light up Your Mind</h1>
                    <p class="lead">Hey! Just one small positive thought in the morning can change your whole day.</p>
                    <hr class="my-4">
                    <p>Opportunities don't happen, you create them.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8000/register" role="button">Register
                            Now</a>
                    </p>
                </div>
            </td>
        </tr>

        <br>

        <td></td>
        </tr>
    </table>
</body>

</html>
@endsection
