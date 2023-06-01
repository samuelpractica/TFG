@extends('layouts.app')

@section('content')
    <h1>Create Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
