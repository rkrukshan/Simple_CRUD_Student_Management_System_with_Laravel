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
    <h1 c>Schools and Universities are the foundation of knowledge and an educational body on which students rely upon. <br> Therefore, they need to maintain a proper database of its students to keep all the updated records and easily share information with students. <br>

    Most schools and Universities count on an advanced software tool knows as 'Student Information System (SIS)' to keep all their student records and administrative operations including, examinations, attendance, and other activities. <br>

    Over the recent years, the performance and efficiency of the education industry have been enhanced by using the Student Management System. <br> This tool has productively taken over the workload of the admin department with its well-organized, easy, and reliable online school management software.<br></h1>
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
