{{--  @extends('layouts.mainlayout')  --}}
@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
{{--  @section('navigation')  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    {{--  <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>  --}}
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
                            <a class="btn btn-info btn-lg link-light" href="{{ url('/register') }}"
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
    {{  }}
</body>

</html>
@endsection
