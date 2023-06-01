@extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>
    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Position:</strong> {{ $employee->position }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>
    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
    </form>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
