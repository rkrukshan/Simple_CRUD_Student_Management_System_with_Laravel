@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')
{{-- <form action="{{ route('student.update',$students->admision_number); }}" method="POST" class="form"> --}}
    <form action="{{ route('student.update',$students)}}" method="POST" class="form">

        @csrf
        @method('put')

        <table border="1" class="table">
            <center>
                @if($errors->has('admision_number'))
                <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id=""
                class="form-control" value="{{ $students->admision_number }}"><br>
                <div class="alert alert-danger">
                   <strong style="color: red">{{ $errors->first('first_name') }}</strong> 
                </div>
            @endif

            @if($errors->has('first_name'))

                <label for="first_name">first name</label><input type="text" name="first_name" id=""
                    class="form-control" value="{{ $students->first_name }}"><br>
            @endif

                <label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control"
                    value="{{ $students->last_name }}"><br>
                <label for="gender">gender</label><input type="text" name="gender" id="" class="form-control"
                    value="{{ $students->gender }}"><br>
                {{-- <select name="gender" id="gender" class="form-select">
                    <option value="{{ $students->gender }}">male</option>
                    <option value="{{ $students->gender }}">female</option>
                </select> --}}
                <label for="address">Address</label><input type="text" name="address" id="" class="form-control"
                    value="{{ $students->address }}"><br>
                <label for="dob">first dob</label><input type="date" name="dob" id="" class="form-control"
                    value="{{ $students->dob }}"><br>
                <label for="house_id">House Id</label><input type="text" name="house_id" id="form-control"
                    class="form-control" value="{{ $students->house_id }}"><br>
                <label for="grade_id">Grade Id</label><input type="text" name="grade_id" id="form-control"
                    class="form-control" value="{{ $students->grade_id }}"><br>
                <label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control"
                    value="{{ $students->nic }}"><br>
            </center>
        </table>


        <center><button type="submit" name="" id="" class="btn btn-success btn-lg" value="Save">Save</button>
            <button type="submit" name="" id="" class="btn btn-secondary btn-lg" value="Back"><a class="link-light"
                    href="{{ route('student.index') }}">Back</a></button>
        </center>

    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    @endsection
