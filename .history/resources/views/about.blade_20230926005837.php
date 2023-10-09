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
<h1>A Student Management System is also known as a Student Information System (SIS). <br> These systems work to coordinate scheduling and communications between faculty regarding students. <br> This system exists to simplify information tracking for both parents and administrative staff.</h1>

<h2>Below, we will go into some details on what these systems provide.</h2>

<h3>What Does a Student Management System Do?</h3>
<h2>Student-centric management systems work to make the management of information more accessible. Below is a list of tracking pieces you might have on your information management system:</h2>
<center>
Health information <br>
Schedules <br>
Grade book information <br>
Behavior data <br>
Age <br>
Transcript information <br>
Grade level <br>
</center>
The focus of this sort of management system is that it is student-centric. This software differs from your other type of management system: school management systems.
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
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
        </td>
    </tr>
    </table>
</body>

</html>
@endsection
