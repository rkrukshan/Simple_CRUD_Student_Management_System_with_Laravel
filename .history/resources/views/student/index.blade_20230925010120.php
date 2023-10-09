@extends('layouts.mainlayout')
@section('navigation')
<!DOCTYPE html>
<html lang="en">

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
                <th>id</th>
                <th>admision number</th>
                <th>first name</th>
                <th>last name</th>
                <th>gender</th>
                <th>Address</th>
                <th>dob</th>
                <th>house id</th>
                <th>house Name</th>
                <th>grade id</th>
                <th>NIC</th>
                <th>Subject</th>
                <th>Action</th>


            </thead>
        </tr>
        @foreach ($students as $student)
        <tr>
            <center>
                <form action="{{ route('student.destroy',$student) }}" method="POST" class="form">
                    @csrf
                    @method('delete')
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->admision_number }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->house_id }}</td>
                    <td>{{ $student->house->house_name }}</td>
                    <td><a class="badge badge-pill badge-dark a link-dark"
                            href="{{ route('grade.show',$student->grade->id) }}">{{ $student->grade->grade_name }}</a>
                    </td>
                    <td>{{ $student->nic }}</td>
                    <td><a class="badge badge rounded-pill bg-success a link-light"
                            href="{{ route('student.subject.show',[$student,50]) }}">Subject</a></td>
                    <td><a class="link-light" href="{{ route('student.show',$student) }}">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn-outline-info btn-lg">show</button>
                        </a><br>
                        {{--
                    <td><a href="{{ route('subject.show',$student->subjects->id) }}">{{ $student->subjects->subject_id
                            }}</a></td> --}}

                    <a class="link-light-" href="{{ route('student.edit',$student) }}">
                        <button type="button" class="btn-outline-warning btn-lg">edit</button></a><br>
                    <button type="submit" class="btn-outline-danger btn-lg" value="save">delete</button>
    </td>
    {{-- <td><button type="button" class="btn btn-info"><a
                href="{{ route('student.show',[$student->admision_number]) }}" class="link-light">show</a></button></td>
    --}}
    </div>
    </form>
    </tr>
    @endforeach
    </td>
</table>
<div class="pagination justify-content-center">
    {{ $students->links() }}
</div>

@endsection
