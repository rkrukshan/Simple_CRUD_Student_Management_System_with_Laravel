@extends('layouts.mainlayout')
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

    <table border="1" class="table">
        <br>
        <br>
        <br>
        <center><button type="button" class="btn btn-primary"><a href="{{ route('student.create') }}"
                    class="link-light">Create</a></button></center>
        <br>

        <td>
            <table border="1" class="table table-light table-striped">
                <tr>
                    <thead class="table-dark">
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
                   

                        <td><button type="button" class="btn btn-info btn-lg"><a href="{{ route('student.show',$student) }}"
                                    class="link-light">show</a></button>

                        <td><button type="button" class="btn btn-warning btn-lg"><a href="{{ route('student.edit',$student) }}"
                                    class="link-light">edit</a></button></td>
                        <td><button type="submit" class="btn btn-danger btn-lg" value="save">delete</button></td>
                        {{-- <td><button type="button" class="btn btn-info"><a
                                    href="{{ route('student.show',[$student->admision_number]) }}"
                                    class="link-light">show</a></button></td> --}}
                                </tr>

                    </form>

                @endforeach
            </table>
        </td>
    </table>

</body>

</html>
@endsection
