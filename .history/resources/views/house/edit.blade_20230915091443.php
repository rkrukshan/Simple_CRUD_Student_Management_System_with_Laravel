@extends('layouts.mainlayout')
@section('navigation')
<table>

</table>
<form action="{{ route('house.update'),$houses }}" method="POST">
    <td><input type="text" value="{{ $houses->house }}"></td><br>
    <td><input type="text" value="{{ $houses->house }}"></td><br>
</form>
@endsection
