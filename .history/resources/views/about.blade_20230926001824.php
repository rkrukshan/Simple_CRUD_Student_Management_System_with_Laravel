@extends('layouts.app')
@section('content')
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
        <td>
            <div class="card text-white  mb-3" style="max-width: 18rem;">
                <div class="card-header">{{asset( '/images/1.png') }}</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
        </td>
        <td>
            <div class="card text-white  mb-3" style="max-width: 18rem;">
                <div class="card-header">{{asset( '/images/1.png') }}</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
        </td>
        <td>
            <div class="card text-white  mb-3" style="max-width: 18rem;">
                <div class="card-header">{{asset( '/images/1.png') }}</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
        </td>
    </table>
</body>

</html>
