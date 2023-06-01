@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $employee->name) }}">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $employee->position) }}">
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" name="salary" id="salary" class="form-control" value="{{ old('salary', $employee->salary) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
