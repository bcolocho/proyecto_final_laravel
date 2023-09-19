@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
        @csrf
        @method('PUT')
        <!-- Use method HTTP PUT to update the customer -->

        <div class="form-group">
            <label for="employee_name">Name:</label>
            <input type="text" class="form-control" id="employee_name" name="employee_name"
                value="{{ $employee->employee_name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ $employee->password }}"
                required>
        </div>

        <div class="form-group">
            <label for="id_role">Role:</label>
            <input type="text" class="form-controle" id="id_role" name="id_role" value="{{ $employee->id_role }}"
                required>
        </div>

        <div class="form-group">
            <label for="id_permission">Permission:</label>
            <input type="text" class="form-control" id="id_permission" name="id_permission"
                value="{{ $employee->password }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>

</div>

@endsection