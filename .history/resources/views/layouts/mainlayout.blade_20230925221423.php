<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid thead-dark">
              <a class="navbar-brand" href="#">Student Management System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      pages
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('student.index') }}">student</a></li>
                      <li><a class="dropdown-item" href="{{ route('subject.index') }}">Subject</a></li>
                      <li><a class="dropdown-item" href="{{ route('house.index') }}">House</a></li>
                      <li><a class="dropdown-item" href="{{ route('grade.index') }}">Grade</a></li>
                      <li><hr class="dropdown-divider"></li>
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
<br>
<div>
    @
</div>


    <td>1</td>
</tr>
</table>
</body>
</html>
