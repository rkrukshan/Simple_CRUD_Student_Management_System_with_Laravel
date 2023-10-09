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
    <div id="carouselExampleIndicators" class="carousel slide align-center">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset( '/images/pic1.jpg') }}" width="550" height="775" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset( '/images/pic2.jpg') }}" width="550" height="775" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset( '/images/pic3.jpg') }}" width="550" height="775" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <tr>
        <td width=25%></td>
      <td width="50%"><p><center>A school management system sounds like it is interchangeable with student management, but the difference comes from what information you manage:</td>
        School management systems include information related to the staff.
        Student management software is information limited to students.
        For example, you shouldn’t find grade book information in your school management software. Instead, you might discover payroll information, billing data, and staff reviews.</center> </p></td>
        <td width="55%"></td>
    </tr>
        </td>

      <br>
      <br>
      <br>
      <br>
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
                <div class="card-header"><img src="{{asset( '/images/5.png') }}" alt="" height="250" width="250"></div>
                <div class="card-body">
                    <h5 class="card-title">Higher Grade level</h5>
                    <p class="card-text">Score more & Gain more uplift your value</p>
                </div>
        </td>
    </tr>
    </table>
</body>

</html>
@endsection
