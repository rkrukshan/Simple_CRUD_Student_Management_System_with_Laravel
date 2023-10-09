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
<table border="1">
    <center>
        <h1>Stories</h1>
        <br>
    <tr>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/6.jpg') }}" height="250" width="250" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/7.jpg') }}" height="250" width="250" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/8.jpg') }}" height="250" width="250" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/9.jpg') }}" height="250" width="250" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/10.png') }}" height="250" width="250" alt=""></div></td>
        <td><div class="img-fluid img-thumbnail"><img src="{{ asset('/images/11.jpg') }}" height="250" width="250" alt=""></div></td>
    </tr>
<br>
<br>
<br>
<br>
<br>
        td


    <tr>
        <div class="">
            <td><h1>Welcome</h1> <h3>to Dashboard</h3></td>

            <td><img src="{{ asset('images/1.png') }}" alt=""></td>
        </div>
    </tr>



</center>
</table>
@endsection
