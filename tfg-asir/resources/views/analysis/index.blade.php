@extends('layouts.app')

@section('content')
    <h1>Analysis</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($analyses as $analysis)
                <tr>
                    <td>{{ $analysis->id }}</td>
                    <td>{{ $analysis->name }}</td>
                    <td>{{ $analysis->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
