@extends('layouts.app')

@section('content')
    <h1>Point of Sales</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pointsOfSale as $pointOfSale)
                <tr>
                    <td>{{ $pointOfSale->id }}</td>
                    <td>{{ $pointOfSale->name }}</td>
                    <td>{{ $pointOfSale->address }}</td>
                    <td>{{ $pointOfSale->phone }}</td>
                    <td>
                        <a href="{{ route('pointOfSales.show', $pointOfSale->id) }}">View</a>
                        <a href="{{ route('pointOfSales.edit', $pointOfSale->id) }}">Edit</a>
                        <form action="{{ route('pointOfSales.destroy', $pointOfSale->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
