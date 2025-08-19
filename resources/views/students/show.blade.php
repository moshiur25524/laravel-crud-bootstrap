@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center text-white">All Students</h3>
        <div class="card bg-dark text-white mt-4">
            <div class="card-body border border-success rounded">
                <h5 class="card-title"><strong>Name:</strong> {{ $student->name }}</h5>
                <h5 class="card-text"><strong>Email:</strong> {{ $student->email }}</h5>
                <h5 class="card-text"><strong>Phone:</strong> {{ $student->phone }}</h5>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
@endsection
