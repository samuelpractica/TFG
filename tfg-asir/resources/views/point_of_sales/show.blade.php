@extends('layouts.app')

@section('content')
    <h1>Point of Sale Details</h1>
    <div>
        <p><strong>ID:</strong> {{ $pointOfSale->id }}</p>
        <p><strong>Name:</strong> {{ $pointOfSale->name }}</p>
        <p><strong>Address:</strong> {{ $pointOfSale->address }}</p>
        <p><strong>Phone:</strong> {{ $pointOfSale->phone }}</p>
    </div>
    <a href="{{ route('pointOfSales.edit', $pointOfSale->id) }}">Edit</a>
    <form action="{{ route('pointOfSales.destroy', $pointOfSale->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
