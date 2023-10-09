{{--  @extends('layouts.mainlayout')  --}}
@extends('layouts.app')
@section('content')
{{--  @section('navigation')  --}}

<form action="{{ route('student.store') }}" method="POST" class="form">
    @csrf
    <center>
        <table border="1" class="table">
            <label for="admision_number">Admision Number</label><input type="text" name="admision_number" id=""class="form-control"><br>
            @if($errors->has('admision_number'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <i class="fa-solid fa-shield-halved fa-sm">jyjjty</i>
                 {{ $errors->first('admision_number') }}</div>
            @endif

            <label for="first_name">first name</label><input type="text" name="first_name" id=""class="form-control"><br>
            @if($errors->has('first_name'))
            <div>{{ $errors->first('first_name') }}</div>
            @endif

            <label for="last_name">last name</label><input type="text" name="last_name" id="" class="form-control"><br>
           @if($errors->has('last_name'))
            <div>{{ $errors->first('last_name') }}</div>
            @endif

            <label for="gender">gender</label><br>
            <select name="gender" id="gender" class="form-select">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        @if($errors->has('gender'))
            <div >{{ $errors->first('gender') }}</div>
            @endif

            <label for="address">Address</label><input type="text" name="address" id="" class="form-control"><br>
         @if($errors->has('address'))
            <div>{{ $errors->first('address') }}</div>
            @endif

            <label for="dob">dob</label><input type="date" name="dob" id="" class="form-control"><br>
     @if($errors->has('dob'))
            <div >{{ $errors->first('dob') }}</div>
            @endif

        <label for="house_id">House</label> &nbsp; <button type="button" class="badge rounded-pill bg-info"><a class="link-light" href="{{ route('house.create') }}"> Create House</a></button> <br>
      @if($errors->has('house_id'))
            <div >{{ $errors->first('house_id') }}</div>
            @endif
            {{--  <input type="text" name="house_id" id="form-control"class="form-control">  --}}


            <select name="house_id" id="house_id" class="form-select">
                @foreach ($houses as $key=>$values)
                <option value="{{ $key }}">{{ $values }}</option>
                @endforeach
            </select>



            <label for="grade_id">Grade</label><br>
            {{--  <input type="text" name="grade_id" id="form-control"class="form-control">  --}}
            <select name="grade_id" id="grade_id" class="form-select">
                @foreach ($grades as $key=>$values)
                <option value="{{ $key }}">{{ $values }}</option>
                @endforeach
            </select><br>


            <label for="subject_id">Subject</label> &nbsp; <button type="button" class="badge rounded-pill bg-info"><a class="link-light" href="{{ route('subject.create') }}"> Create Subject</a></button> <br>
            <select name="subject_id[]" id="subject_id" multiple class="form-select">
                @foreach ($subjects as $key=>$values)
                <option value="{{ $key }}">{{ $values }}</option>
                @endforeach
            </select><br>



            <label for="nic">NIC</label><input type="text" name="nic" id="" class="form-control"><br>
            @if($errors->has('nic'))
            <div >{{ $errors->first('nic') }}</div>
            @endif
            </table>
</center>
    <center>
        <button type="submit" name="" id="" class="btn btn-success btn-lg" value="Save">Save</button>
        <button type="button" class="btn btn-secondary btn-lg"><a class="link-light" href="{{ route('student.index') }}"> back</a></button>
    </center>
</form>
@endsection
