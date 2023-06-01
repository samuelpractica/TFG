@extends('layouts.app')

@section('content')
    <h1>Create Table Assignment</h1>
    <form action="{{ route('assignments.store') }}" method="POST">
        @csrf
        <div>
            <label for="table_number">Table Number:</label>
            <input type="text" name="table_number" id="table_number">
        </div>
        <div>
            <label for="customer_id">Customer:</label>
            <select name="customer_id" id="customer_id">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="employee_id">Employee:</label>
            <select name="employee_id" id="employee_id">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
