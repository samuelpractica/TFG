@extends('layouts.app')

@section('content')
    <h1>Create Analysis</h1>
    <form action="{{ route('analysis.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
