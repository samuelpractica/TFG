@extends('layouts.app')

@section('content')
    <h1>Table Assignments</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Table Number</th>
                <th>Customer</th>
                <th>Employee</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->id }}</td>
                    <td>{{ $assignment->table_number }}</td>
                    <td>{{ $assignment->customer->name }}</td>
                    <td>{{ $assignment->employee->name }}</td>
                    <td>{{ $assignment->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
