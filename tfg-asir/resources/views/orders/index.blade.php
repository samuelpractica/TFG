@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Table Assignment</th>
                <th>Employee</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->tableAssignment->table_number }}</td>
                    <td>{{ $order->employee->name }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
