{{--  @extends('layouts.mainlayout')  --}}
@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
{{--  @section('navigation')  --}}
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
                    <h3>
                        <i>
                            <center>"Opportunities don't happen, you create them."</center>
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
        <tr>
            <table border="1">
                <td>
            <div>
            <ul style="list-style-type: none;">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Portfolio</li>
                <li>Contact-US</li>
            </ul>

        </div>
        </td>
        <td width=>

        <div>
            <ul style="list-style-type: none;">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Portfolio</li>
                <li>Contact-US</li>
            </ul>

        </div>
        </td>
        <td width=>
            <div>
            <ul style="list-style-type: none;">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Portfolio</li>
                <li>Contact-US</li>
            </ul>

        </div>
        </td>
        <td width=>

        <div>
            <ul style="list-style-type: none;">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Portfolio</li>
                <li>Contact-US</li>
            </ul>

        </div>
        </td>
        </table>
        </tr>
    </table>
@endsection
