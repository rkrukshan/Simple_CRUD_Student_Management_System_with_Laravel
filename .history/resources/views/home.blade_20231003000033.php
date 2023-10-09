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
    <tr>
        <td><div class="card">11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div class="card">11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div class="card">11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div class="card">11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div class="card">11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
    </tr>


    <tr>
        <div class="container-fluid">
            <td>yujyjkyukyuk</td>
            <td><img src="{{ asset('images/1.png') }}" alt=""></td>
        </div>
    </tr>


    <tr>
        <div class="container-fluid">
            <td>yujyjkyukyuk</td>
            <td><img src="{{ asset('images/1.png') }}" alt=""></td>
        </div>
    </tr>



</center>
</table>
@endsection
