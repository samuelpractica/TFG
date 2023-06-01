@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>
    <div>
        <p><strong>ID:</strong> {{ $order->id }}</p>
        <p><strong>Table Assignment:</strong> {{ $order->tableAssignment->table_number }}</p>
        <p><strong>Employee:</strong> {{ $order->employee->name }}</p>
        <p><strong>Amount:</strong> {{ $order->amount }}</p>
        <p><strong>Status:</strong> {{ $order->status }}</p>
    </div>
    <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
    <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
