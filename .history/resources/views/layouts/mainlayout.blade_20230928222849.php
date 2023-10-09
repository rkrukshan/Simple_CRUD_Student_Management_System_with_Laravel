<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fullstack\crud\bootstrap\css
    ">
    <script src="fullstack\crud\bootstrap\JS
    "></script>
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid thead-dark">
                    <a class="navbar-brand" href="#">Student Management System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    pages
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('student.index') }}">student</a></li>
                                    <li><a class="dropdown-item" href="{{ route('subject.index') }}">Subject</a></li>
                                    <li><a class="dropdown-item" href="{{ route('house.index') }}">House</a></li>
                                    <li><a class="dropdown-item" href="{{ route('grade.index') }}">Grade</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </tr>
        <tr>
            <td>
                <div class="container-fluid">
                    <img src="1.png" alt="">
                </div>&nbsp;
                <div class=""></div>
            </td>
            <td><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="jumbotron">
                    <h1 class="display-4">Light up Your Mind</h1>
                    <p class="lead">Hey! Just one small positive thought in the morning can change your whole day.</p>
                    <hr class="my-4">
                    <p>Opportunities don't happen, you create them.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8000/register" role="button">Register
                            Now</a>
                    </p>
                </div>
            </td>
        </tr>

        <br>
        <center>
            @yield('navigation')
        </center>
        <td></td>
        </tr>
    </table>
</body>

</html>
