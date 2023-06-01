@extends('layouts.app')

@section('content')
    <h1>Table Assignment Details</h1>
    <div>
        <p><strong>ID:</strong> {{ $assignment->id }}</p>
        <p><strong>Table Number:</strong> {{ $assignment->table_number }}</p>
        <p><strong>Customer:</strong> {{ $assignment->customer->name }}</p>
        <p><strong>Employee:</strong> {{ $assignment->employee->name }}</p>
        <p><strong>Status:</strong> {{ $assignment->status }}</p>
    </div>
    <a href="{{ route('assignments.edit', $assignment->id) }}">Edit</a>
    <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
