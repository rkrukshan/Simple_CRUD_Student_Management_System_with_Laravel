@extends('layouts.app')
@section('content')
    <form action="{{ route('subject.store') }}" method="POST" class="form">
        @csrf

    <table>
        <center>

        <label for="subject_name">Subject index</label><input type="text" name="subject_index" class="form-control"<<br>
        @if($errors->has('subject_name'))
            <div class="alert alert-danger">
<strong style="color: red">{{ $errors-> }}</strong>
            </div>
            @endif
        <label for="subject_name">Subject order</label><input type="text" name="subject_order" class="form-control"<<br>
    </center>
    </table>
    <center><br>
<button type="submit" class="btn btn-success">Save</button>
<button type="submit" class="btn btn-secondary"><a class="link-light" href="{{ route('subject.index') }}">Back</button></a>
</form>
</center>
@endsection
