@extends('layouts.app')

@section('content')
    <h1>Edit Analysis</h1>
    <form action="{{ route('analysis.update', $analysis->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $analysis->name }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $analysis->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
