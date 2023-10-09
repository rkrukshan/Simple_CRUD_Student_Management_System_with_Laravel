@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <td>
            <lable>Subject Name<input type="text" name="subject_name"></lable><br>
            <lable>Subject Index<input type="text" name="subject_"></lable><br>
            <lable>Subject Order<input type="text" name="subject_"></lable><br>

        </td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
