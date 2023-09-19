@extends('dashboard')

@section('content')
<div class="container">
    <h1>Employee Detail</h1>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Permission</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->password }}</td>
                <td>{{ $employee->role }}</td>
                <td>{{ $employee->permission }}</td>
            </tr>
        </tbody>

        <a href="{{ route('employee.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection