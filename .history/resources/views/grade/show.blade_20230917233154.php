@extends('layouts.mainlayout')
@section('navigation')
<table class="table table-striped table-active">
    <center>
    <lable>Grade Group</lable><br><input type="text" value="{{ $grades->grade_group }}" class="form-control" readonly><br>
    <lable>Grade Name</lable><br><input type="text" value="{{ $grades->grade_name }}" class="form-control" readonly><br>
    <lable>Grade Order</lable><br><input type="text" value="{{ $grades->grade_order }}" class="form-control" readonly><br>
    <center><button class="btn btn-secondary"><a class="link-light" href="{{ route('grade.index') }}">Back</a></button></center>


    <table border="1" class="table table-striped table table-hover table-responsive">
        <br>
        <br>
        <br>
        <center><button type="button" class="btn btn-primary"><a href="{{ route('student.create') }}"
                    class="link-light">Create</a></button></center>
        <br>

        <td>

                <tr>
                    <thead class="table-dark">
                        <th>admision number</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>gender</th>
                        <th>Address</th>
                        <th>dob</th>
                        <th>house id</th>
                        <th>grade id</th>
                        <th>NIC</th>
                        <th>Action</th>


                    </thead>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <center>
                    <form action="{{ route('student.destroy',$student) }}" method="POST" class="form">
                        @csrf
                        @method('delete')
                    <td>{{ $student->admision_number }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->house_id }}</td>
                    <td>{{ $student->grade_id }}</td>
                    <td>{{ $student->nic }}</td>

                    <td><button type="button" class="btn-outline-info btn-lg"><a href="{{ route('student.show',$student) }}"
                                >show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <button type="button" class="btn-outline-warning btn-lg"><a href="{{ route('student.edit,$student') }}"
                               >edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn-outline-danger btn-lg" value="save">delete</button></td>
                    {{-- <td><button type="button" class="btn btn-info"><a href="{{ route('student.show',[$student->admision_number]) }}" class="link-light">show</a></button></td> --}}
                    </form>
                </tr>
                @endforeach
        </td>
        <button type="button" class="btn-outline-danger btn-lg" a href="{{ route{{ route('grade.index') }} }}" value="save">delete</button>

    </table>
</center>
</table>
@endsection
