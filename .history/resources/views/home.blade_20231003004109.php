@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<table border="1" class="table">
    <center>
        <h1>Stories</h1>
        <br>
    <tr>
        <center>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/6.jpg') }}" height="290" width="290" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/7.jpg') }}" height="290" width="290" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/8.jpg') }}" height="290" width="290" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/9.jpg') }}" height="290" width="290" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/10.png') }}" height="290" width="290" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/11.jpg') }}" height="290" width="290" alt=""></div></td>
        </center>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<center><h1>Posts</h1></center>
<table class="table">
        <td><h1></h3><img src="{{ asset('/images/11.jpg') }}" height="550" width="750" alt=""></td>&nbsp;&nbsp;
        <td><div class="jumbotron">
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
        </div></td>


        <td><div class="jumbotron">
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
        </div></td><td><div class="jumbotron">
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
        </div></td><td><div class="jumbotron">
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
        </div></td>



</center>
</table>
@endsection
