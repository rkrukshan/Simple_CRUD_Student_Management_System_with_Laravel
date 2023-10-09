@extends('layouts.mainlayout')
@section('navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<br>
<br>
    <center><button class="btn btn-primary"><a class="link-light" href=" {{ route('grade.create') }}">Create</a></button></center><br>
    <br>
    <br>

<table class="table table-striped table-hover" border="1">
    <tr>
    <thead class="table-dark">
        <th>Grade Group</th>
        <th>Grade Name</th>
        <th>Grade Order</th>
        <th>Action</th>
    </thead>
</tr>

@foreach ($grades as $grade)

<form action="{{ route('grade.destroy',$grade) }}"method="POST">
    <tr>
    @csrf
    @method('delete')

    <td>{{ $grade->grade_group }}</td>
    <td>{{ $grade->grade_name }}</td>
    <td>{{ $grade->grade_order }}</td>

    <td><button type="button" class="btn btn-outline-info <mat-button-toggle-group [(ngModel)]="modelName" multiple vertical="false">
        <mat-button-toggle [value]="choice1">
            Choice1
        </mat-button-toggle>
        <mat-button-toggle [value]="choice2">
            Choice2
        </mat-button-toggle>
    </mat-button-toggle-group>"><a href="{{ route('grade.show',$grade) }}">show</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-warning <mat-button-toggle-group [(ngModel)]="modelName" multiple vertical="false">
                <mat-button-toggle [value]="choice1">
                    Choice1
                </mat-button-toggle>
                <mat-button-toggle [value]="choice2">
                    Choice2
                </mat-button-toggle>
            </mat-button-toggle-group>"><a href="{{ route('grade.edit',$grade) }}">edit</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-danger <mat-button-toggle-group [(ngModel)]="modelName" multiple vertical="false">
                <mat-button-toggle [value]="choice1">
                    Choice1
                </mat-button-toggle>
                <mat-button-toggle [value]="choice2">
                    Choice2
                </mat-button-toggle>
            </mat-button-toggle-group>">delete</button></td>







    </form>


</tr>

@endforeach
</table>
</body>
</html>
@endsection
