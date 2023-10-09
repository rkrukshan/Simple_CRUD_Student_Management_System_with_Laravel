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
                        <th>Student Name</th>
                        <th>Student Index</th>
                        <th>Student Order</th>



                    </thead>
                </tr>
                @foreach ($students as $student)
                <tr>
                    <center>
                    <td>{{ $student->first_name.last }}</td>
                    <td>{{ $student->subject_index }}</td>
                    <td>{{ $student->subject_order }}</td>
                </tr>
                @endforeach
        </td>
    </table>
@endsection
