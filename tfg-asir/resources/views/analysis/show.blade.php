@extends('layouts.app')

@section('content')
    <h1>Analysis Details</h1>
    <div>
        <p><strong>ID:</strong> {{ $analysis->id }}</p>
        <p><strong>Name:</strong> {{ $analysis->name }}</p>
        <p><strong>Description:</strong> {{ $analysis->description }}</p>
    </div>
    <a href="{{ route('analysis.edit', $analysis->id) }}">Edit</a>
    <form action="{{ route('analysis.destroy', $analysis->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
