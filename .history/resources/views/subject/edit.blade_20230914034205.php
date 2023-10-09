@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.update',$subjects) }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <td>
            <lable>Subject Name<input type="text" name=""></lable><br>
            <lable>Subject <input type="text" name=""></lable><br>
            <lable>Subject <input type="text" name=""></lable><br>

        </td>

    </table>
<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
</form>
</center>
@endsection
