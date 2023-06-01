@extends('layouts.app')

@section('content')
    <h1>Edit Table Assignment</h1>
    <form action="{{ route('assignments.update', $assignment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="table_number">Table Number:</label>
            <input type="text" name="table_number" id="table_number" value="{{ $assignment->table_number }}">
        </div>
        <div>
            <label for="customer_id">Customer:</label>
            <select name="customer_id" id="customer_id">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $assignment->customer_id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="employee_id">Employee:</label>
            <select name="employee_id" id="employee_id">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == $assignment->employee_id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
