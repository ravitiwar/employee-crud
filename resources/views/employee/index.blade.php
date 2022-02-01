@extends('layout')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h2>All employees</h2>
        </div>
        <div>
            <a class="btn btn-primary btn-sm" href="{{route('employee.create')}}">Create an employee</a>
        </div>
    </div>
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

        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->name}}</td>
                <td>{{$employee->age}}</td>
                <td>{{$employee->willing_to_work?'Yes':'No'}}</td>
                <td>{{$employee->languages}}</td>
                <td>
                    <span class="btn-group btn-group-sm">
                        <a class="btn btn-primary" href="{{route('employee.edit',$employee->id)}}">Edit</a>
                        <button class="btn btn-danger"
                                data-href="{{route('employee.destroy',$employee->id)}}">Delete</button>
                    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$employees->links()}}

@endsection
