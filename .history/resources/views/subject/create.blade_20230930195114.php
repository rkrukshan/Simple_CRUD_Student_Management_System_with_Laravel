@extends('layouts.app')
@section('content')
<form action="{{ route('subject.store') }}" method="POST" class="form">
    @csrf

    <table>
        <center>

            <label for="subject_name">Subject index</label><input type="text" name="subject_index" class="form-control"><br>
            @if($errors->has('subject_name'))
            <div class="alert alert-danger">
                <strong style="color: red">{{ $errors->first('subject_name') }}</strong>
            </div>
            @endif

            <label for="subject_index">Subject index</label><input type="text" name="subject_index" class="form-control"><br>
            @if($$errors->has('subject_index'))
            <div class="alert alert_danger">
                <strong style="color: red">{{ $errors->first('subject_index') }}</strong>
            </div>
            @endif

           <label for="subject_order">Subject Order</label><input type="text" name="subject_order">
           @if($errors->has('subject_order'))
           <div class="alert alert-danger">{{ $errors->first() }}</div>

           @endif
        </center>
    </table>
    <center><br>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="submit" class="btn btn-secondary"><a class="link-light"
                href="{{ route('subject.index') }}">Back</button></a>
</form>
</center>
@endsection
