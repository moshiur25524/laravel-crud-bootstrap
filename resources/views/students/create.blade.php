@extends('layouts.app')

@section('content')
    <h3 class="text-center text-white">Create Student</h3>
    <div class="text-center">
        <a href="{{ route('students.index') }}" class="btn btn-outline-warning mt-2">Back</a>
    </div>
    <form action="{{ route('students.store') }}" method="POST"
        class="container text-white w-50 mx-auto mt-5 border border-white">

        @csrf
        <div class="row mb-3">
            <label for="inputname3" class="col-form-label">Name</label>
            <div class="col-sm">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" placeholder="Your Name" id="inputname3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-form-label">Email</label>
            <div class="col-sm">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" placeholder="Your Email" id="inputEmail3">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPhone3" class="col-form-label">Phone</label>
            <div class="col-sm">
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                    value="{{ old('phone') }}" placeholder="Your Phone" id="inputPhone3">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success mb-2">Save</button>
    </form>
@endsection
