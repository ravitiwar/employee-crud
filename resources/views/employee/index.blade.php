@extends('layout')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Wiling to work</th>
            <th>Languages</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($employees as $employee)
                <td>{{$employee->name}}</td>
                <td>{{$employee->age}}</td>
                <td>{{$employee->willing_to_work?'Yes':'No'}}</td>
                <td>{{$employee->languages}}</td>
                <td>
                    <span class="btn-group btn-group-sm">
                        <a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}">Edit</a>
                        <button class="btn btn-danger" data-href="{{route('employee.destroy',$employee->id)}}">Delete</button>
                    </span>
                </td>
            @endforeach
        </tr>
@endsection
