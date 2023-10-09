@extends('layouts.mainlayout')
@section('navigation')
<table>

</table>
<form action="{{ route('house.update'),$houses }}" method="POST">
    <td><input type="text" value="{{  }}"></td><br>
    <td><input type="text" value="{{  }}"></td><br>
</form>
@endsection
