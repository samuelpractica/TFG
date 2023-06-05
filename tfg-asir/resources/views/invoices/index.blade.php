@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Invoices</h1>
        <a href="{{ route('invoices.create') }}" class="btn btn-primary mb-3">Create Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            <a href="{{ route('invoices.show', $employee->id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('invoices.edit', $employee->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('invoices.destroy', $employee->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
