@extends('layouts.app')

@section('content')
    <h1>Employee List</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
    <br><br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
