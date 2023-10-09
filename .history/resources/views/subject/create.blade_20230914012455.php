@extends('layouts.mainlayout')
@section('navigation')
    <form action="{{ route('subject.store') }}" method="POST" class="form">
        @csrf
<center>
    <table>
        <td><label for="subject_name">Subject name</label><input type="text" name="subject_name" class="form-control"><br></td>
        <td><label for="subject_name">Subject name</label><input type="text" name="subject_index" class="form-control"><br></td>
        <td><label for="subject_name">Subject name</label><input type="text" name="subject_order" class="form-control"><br></td>

    </table>


<button type="submit" class="btn btn-success btn-lg"><a href="{{ route('subject.index') }}"></a>Save</button>
<button type="submit" class="btn btn-primary"><a href="{{ route('subject.index') }}">Back</button></a>

</form>
</center>
@endsection
