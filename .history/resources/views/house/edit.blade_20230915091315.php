@extends('layouts.mainlayout')
@section('navigation')
<table>

</table>
<form action="{{ route('house.update'),$houses }}" method="POST">
    <td><input type="text"></td><br>
    <td><input type="text"></td><br>
</form>
@endsection
