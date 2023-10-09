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
    <tr>
        <td><div >11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div >11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div >11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div >11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
        <td><div >11111111111
            1111111111111111
        11111111111111111111
    111111111111111111111111
1111111111111111111111111111</div></td>
    </tr>
</center>
</table>
@endsection
