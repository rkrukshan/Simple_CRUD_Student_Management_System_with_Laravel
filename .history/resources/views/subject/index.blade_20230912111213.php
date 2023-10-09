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
        <br>
        <br>
        <br>
        <center><button type="button" class="btn btn-primary"><a href="{{ route('subject.create') }}"
                    class="link-light">Create</a></button></center>
        <br>
        <td>
            <h1><a href="http://127.0.0.1:8000/subject/create">subject</a></h1>
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
                @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->subject_name }}</td>
                    <td>{{ $subject->Subject_index }}</td>
                    <td>{{ $subject->Subject_order }}</td>
                    <td>{{ $subject->gender }}</td>
                    <td>{{ $subject->address }}</td>
                    <td>{{ $subject->dob }}</td>
                    <td>{{ $subject->house_id }}</td>
                    <td>{{ $subject->grade_id }}</td>
                    <td>{{ $subject->nic }}</td>
                    <form action="{{ route('subject.destroy',$subject) }}" method="POST">
                        @csrf
                        @method('delete')
                        <td><button type="button" class="btn btn-info"><a href="{{ route('subject.show',[$subject->admision_number]) }}" class="link-light">show</a></button></td>
                        <td><button type="button" class="btn btn-warning"><a href="{{ route('subject.edit',$subject) }}"class="link-light">edit</a></button></td>
                        <td><button type="submit" class="btn btn-danger" value="save">delete</button></td>
                    </form>
                </tr>
                @endforeach
            </table>
        </td>
    </table>
</body>

</html>
