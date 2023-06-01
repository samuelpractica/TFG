@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $customer->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $customer->email }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ $customer->phone }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
