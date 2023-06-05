@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Employee Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $employee->id }}</td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td>{{ $employee->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $employee->last_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $employee->phone }}</td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>{{ $employee->position }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
