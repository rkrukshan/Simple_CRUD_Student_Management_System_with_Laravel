{{-- @extends('layouts.mainlayout') --}}
@extends('layouts.app')
@extends('layouts.footer-layout')
@section('content')
{{-- @section('navigation') --}}
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Student Management System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle">

                        <li><a class="dropdown-item" href="{{ route('student.index') }}">Student</a></li>
                        <li><a class="dropdown-item" href="{{ route('subject.index') }}">Subject</a></li>
                        <li><a class="dropdown-item" href="{{ route('grade.index') }}">Grade</a></li>
                        <li><a class="dropdown-item" href="{{ route('house.index') }}">House</a></li>
                        <li><a class="dropdown-item" href="{{ route('subject.index') }}"></a></li>
                        <li></li><a class="dropdown-item" href="{{ route('student.index') }}">student</a></li>
                        </a>



                </div>
                </li>
                </ul>
                </div>
            </nav>
        </tr>
        <tr>
            <td>
                <div class="container-fluid"><br>
                <br>
                <br>
                <br>
                <br>
                    <img src="{{asset('/images/index.png')}}" alt="">
                </div>&nbsp;
                <div class=""></div>
            </td>
            <td><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="jumbotron">
                    <h1 class="display-4 boxs"><strong>
                            <center>Light up Your Mind</center>
                        </strong></h1>
                    <p class="lead">
                    <h5><center>Hey! Just one small positive thought in the morning can change your whole <center>day.</center>
                    </center></h5>
                    </p>
                    <hr class="my-4">
                    <p>
                    <h3><i>
                            <center>Opportunities don't happen, you create them.</center>
                        </i></h3>
                    </p>
                    <p class="lead">
                        <center>
                            <a class="btn btn-info btn-lg link-light" href="http://127.0.0.1:8000/register"
                                role="button">Register
                                Now</a>
                        </center>
                    </p>
                </div>
            </td>
        </tr>

        <br>

        <td></td>
        </tr>
    </table>
    @con
</body>

</html>
@endsection
