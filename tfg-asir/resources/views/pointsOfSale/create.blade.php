@extends('layouts.app')

@section('content')
    <h1>Create Point of Sale</h1>
    <form action="{{ route('pointOfSales.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
