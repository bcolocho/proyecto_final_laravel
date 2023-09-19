<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = employee::all();
        return view('employee.index', compact('employee'));
        
    }

    public function create()
    {
        $employee = employee::all();
        return view ('employee.create', compact('employee'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required|string|max:200',
            'email' => 'required|email|unique:employee',
            'password' => 'required|string|max:10',
            'id_rol' => 'required|string|max:2',
            'id_permission' => 'required|string|max:2'
        ]);

        Employee::create([
            'employee_name' => $request->employee_name,
            'email' => $request->email,
            'password' => $request->pasword,
            'id_rol' => $request->id_rol,
            'id_premision' => $request->id_permission,
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee successfully registered.');
    }

    public function show(Employee $employee)
    {
        return view('employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'employee_name' => 'required|string|max:200',
            'email' => 'required|email|unique:employee,email,' . $employee->id,
            'password' => 'required|string|max:10',
        ]);

        $employee->update([
            'employee_name' => $request->customer_name,
            'email' => $request->email,
            'password' => $request->pasword,
        ]);

        return redirect()->route('employee.index')->with('success', 'Employee successfully updated.');
    }
}