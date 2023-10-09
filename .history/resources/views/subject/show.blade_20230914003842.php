@extends('layouts.mainlayout')
@section('navigation')
<table>
    <td>
        <label for="">
            <input type="text">

        </label>
        <label for="">
            <input type="text">
            
        </label>
    </td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
@endsection
