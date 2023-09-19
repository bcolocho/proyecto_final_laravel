@extends('dashboard')

@section('title', 'Dashboard')

@section('content_header')
<h1>Employee Record</h1>
@stop

@section('content')
<div class="container">
    <h1>Employee Detail</h1>

    @if(session('success'))
    <div class="alert alert-info">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('employee.create') }}" class="btn btn-danger">Register</a>

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
            @foreach($employee as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->employee_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->password }}</td>
                <td>{{ $item->role }}</td>
                <td>{{ $item->permission }}</td>

                <td>
                    @if($item->status = '1')
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                </td>

                <td>
                    <a href="{{ route('employee.show', $item->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                    <!-- form to deactivate customers -->

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection