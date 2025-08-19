@extends('layouts.app')

@section('content')
    <h3 class="text-center text-white">All Students</h3>
    <div class="text-center">
        <a href="{{ route('students.create') }}" class="btn my-2 btn-primary">Add Student</a>

    @section('success')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>
            {{-- {{ $value }} --}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endsection
</div>
<table class="table container table-secondary">
    <thead class="table-success">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone </th>
            <th scope="col">Action </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <th scope="row">{{ $student->name }}</th>
                <th scope="row">{{ $student->email }}</th>
                <th scope="row">{{ $student->phone }}</th>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-warning">View</a>
                    <button type="button" class="btn btn-outline-info">Edit</button>
                    <button type="button" class="btn btn-outline-danger">Delete</button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">No Students Found!!</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{-- pagination --}}
<div class="d-flex justify-center items-center">
    {{ $students->links() }}
</div>
@endsection
