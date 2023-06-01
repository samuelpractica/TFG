@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <div>
        <p><strong>ID:</strong> {{ $customer->id }}</p>
        <p><strong>Name:</strong> {{ $customer->name }}</p>
        <p><strong>Email:</strong> {{ $customer->email }}</p>
        <p><strong>Phone:</strong> {{ $customer->phone }}</p>
    </div>
    <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
