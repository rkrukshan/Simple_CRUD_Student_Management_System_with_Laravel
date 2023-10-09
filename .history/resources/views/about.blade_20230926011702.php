@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')

@section('navigation')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
        <td width="50%">
            <div class="card text-black  mb-3" style="max-width: 18rem;">
                <div class="card-header"><img src="{{asset( '/images/1.png') }}" alt="" height="250" width="250"></div>
                <div class="card-body">
                    <h5 class="card-title">Worth Knowledge</h5>
                    <p class="card-text"></p>
                </div>
        </td>
        <td width="50%">
            <div class="card text-black  mb-3" style="max-width: 18rem;">
                <div class="card-header"><img src="{{asset( '/images/2.png') }}" alt="" height="250" width="250"></div>
                <div class="card-body">
                    <h5 class="card-title">Valuable Time title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
        </td>

        <td width="50%">
            <div class="card text-black  mb-3" style="max-width: 18rem;">
                <div class="card-header"><img src="{{asset( '/images/3.png') }}" alt="" height="250" width="250"></div>
                <div class="card-body">
                    <h5 class="card-title">Higher Grade level</h5>
                    <p class="card-text">Score more & Gain more uplift y</p>
                </div>
        </td>
    </tr>
    </table>
</body>

</html>
@endsection
