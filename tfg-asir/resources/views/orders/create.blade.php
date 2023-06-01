@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div>
            <label for="table_assignment_id">Table Assignment:</label>
            <select name="table_assignment_id" id="table_assignment_id">
                @foreach($tableAssignments as $tableAssignment)
                    <option value="{{ $tableAssignment->id }}">{{ $tableAssignment->table_number }}</option>
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
        <div>
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
