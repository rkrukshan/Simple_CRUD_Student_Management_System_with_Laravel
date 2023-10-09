@extends('layouts.mainlayout')
@section('navigation')
<form action="{{ route('student.store') }}" method="POST" class="form">
    @csrf

        <table border="1" class="table">
            <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id=""class="form-control"><br>
            <label for="first_name">first name</label><input type="text" name="first_name" id=""class="form-control"><br>
            <label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control"><br>
            <label for="gender">gender</label><br>
            <select name="gender" id="gender" class="form-select">
                <option value="gender">female</option>gender
            </select>
            <label for="address">Address</label><input type="text" name="address" id="" class="form-control"><br>
            <label for="dob">first dob</label><input type="date" name="dob" id="" class="form-control"><br>
            <label for="house_id">House Id</label><br>
            {{--  <input type="text" name="house_id" id="form-control"class="form-control">  --}}


            <select name="house_id" id="house_id" class="form-select">
                @foreach ($houses as $key=>$values)
                <option value="{{ $key }}">{{ $values }}</option>
                @endforeach
            </select>



            <label for="grade_id">Grade Id</label><br>
            {{--  <input type="text" name="grade_id" id="form-control"class="form-control">  --}}
            <select name="grade_id" id="grade_id" class="form-select">
                @foreach ($grades as $key=>$values)
                <option value="{{ $key }}">{{ $values }}</option>
                @endforeach
            </select><br>
            <label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control"><br>
            </table>

    <center><button type="submit" name="" id="" class="btn-success btn-lg" value="Save">Save</button>
        <button type="button" class="btn btn-secondary"><a class="link-light" href="{{ route('student.index') }}"> back</a></button>
    </center>
</form>
@endsection
