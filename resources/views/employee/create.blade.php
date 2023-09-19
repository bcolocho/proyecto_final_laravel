@extends('dashboard')

@section('content')
<div class="container">
    <h1>Register New Employee</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('employee.store') }}">
        @csrf
        <div class="form-group">
            <label for="employee_name">Name:</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name"
                value="{{ old('employee_name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}"
                required>
        </div>

        <div class="form-group">
            <label for="id_role">Role:</label>
            <input type="id_role" class="form-control" id="id_rol" name="id_role" value="{{ old('id_role') }}" required>
        </div>

        <div class="form-group">
            <label for="id_permission">Permsission:</label>
            <input type="id_permission" class="form-control" id="id_permission" name="id_permission"
                value="{{ old('id_permission') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

</div>

@endsection