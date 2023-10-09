@extends('layouts.mainlayout')
<table>
    <td>{{ $subjects->subject_name }}</td>
    <td>{{ $subjects->subject_index }}</td>
    <td>{{ $subjects->subject_order }}</td>
    <td><button><a href="{{ route('subject.index') }}"></a>Back</button></td>
</table>
