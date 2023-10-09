@extends('layouts.mainlayout')
@section('navigation')
<body>
    <center>
<table border="1" class="table table-striped table table-hover table-responsive">
    <tr>
    <th class="thead-dark">Student ID</th>
    <th class="thead-dark">Subject ID</th>
    </tr>
    <tr>
        <td>{{ $students->id }}</td>



        @foreach ($subjects as $grade)

<form action="{{ route('grade.destroy',$grade) }}"method="POST">
    <tr>
    @csrf
    @method('delete')

    <td>{{ $subject->subject_name }}</td>

    <td><button type="button" class="btn btn-outline-info btn-lg"><a href="{{ route('grade.show',$grade) }}">show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-warning btn-lg"><a href="{{ route('grade.edit',$grade) }}">edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-danger btn-lg">delete</button></td>







    </form>


</tr>

@endforeach
     </tr>
</table>
</center>
</body>
@endsection
