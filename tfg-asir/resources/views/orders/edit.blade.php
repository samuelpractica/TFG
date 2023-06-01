@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="table_assignment_id">Table Assignment:</label>
            <select name="table_assignment_id" id="table_assignment_id">
                @foreach($tableAssignments as $tableAssignment)
                    <option value="{{ $tableAssignment->id }}" {{ $tableAssignment->id == $order->table_assignment_id ? 'selected' : '' }}>
                        {{ $tableAssignment->table_number }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="employee_id">Employee:</label>
            <select name="employee_id" id="employee_id">
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == $order->employee_id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="text" name="amount" id="amount" value="{{ $order->amount }}">
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
