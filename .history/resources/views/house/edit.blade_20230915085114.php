@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td><input type="text"></td><br>
    <td><input type="text"></td><br>
</table>
<form action="{{ route('house.update'),$houses }}" met>

</form>
@endsection
