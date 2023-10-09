<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="js/bootsrtap.js"></script>
    <script src="js/bootsrtap.min.js"></script>


    <title>Document</title>
</head>

<body>

    <table border="1" class="table">
        <center><button type="button" class="btn btn-success"><a href="{{ route('student.create') }}">Create</a></button></center>
        <td>
            <h1><a href="http://127.0.0.1:8000/student/create">Student</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="http://127.0.0.1:8000/subject/create">Subject</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="http://127.0.0.1:8000/house/create">House</a></h1>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1><a href="http://127.0.0.1:8000/grade/create">Grade</a></h1>
        </td>
        <td>
            <table border="1" class="table">
                <tr>
                    <thead>
                        <th>admision_number</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>gender</th>
                        <th>Address</th>
                        <th>dob</th>
                        <th>house_id</th>
                        <th>grade_id</th>
                        <th>NIC</th>
                        <th>Action</th>
                    </thead>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->admision_number }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->house_id }}</td>
                    <td>{{ $student->grade_id }}</td>
                    <td>{{ $student->nic }}</td>
                    <td><button type="button" class="btn btn-info"><a href=""  class="link-light">show</a></button></td>
                    <td><button type="button" class="btn btn-warning"><a href=""  class="link-light">edit</a></button></td>
                    <td><button type="button" class="btn btn-danger"><a href=""  class="link-light">delete</a></button></td>
                </tr>
                @endforeach
            </table>
        </td>
    </table>
</body>

</html>
