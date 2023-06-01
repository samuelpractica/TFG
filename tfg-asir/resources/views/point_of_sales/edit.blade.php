@extends('layouts.app')

@section('content')
    <h1>Edit Point of Sale</h1>
    <form action="{{ route('pointOfSales.update', $pointOfSale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $pointOfSale->name }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ $pointOfSale->address }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ $pointOfSale->phone }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
