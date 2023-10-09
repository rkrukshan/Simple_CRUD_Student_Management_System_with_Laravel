@extends('layouts.mainlayout')
@extends('layouts.app')
@section('content')
@section('navigation')

<center>
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
        @method('put')
        <table>
            <lable>Subject Name</lable><input type="text" name="subject_name" class="form-control"
                value="{{ $subjects->subject_name }}"><br>
                @if($condition)

                @endif
            <lable>Subject Index</lable><input type="text" name="subject_index" class="form-control"
                value="{{ $subjects->subject_index }}"><br>
            <lable>Subject Order</lable><input type="text" name="subject_order" class="form-control"
                value="{{ $subjects->subject_order }}"><br>
            <center>
                <button type="submit" class="btn btn-success btn-lg"><a
                        href="{{ route('subject.index') }}"></a>Save</button>
                <button type="submit" class="btn btn-secondary btn-lg"><a
                        href="{{ route('subject.index') }}"></a>Back</button>
            </center>
        </table>
    </form>
</center>

@endsection
