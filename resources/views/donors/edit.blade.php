@extends('layouts.app')

@section('content')
    <h1>Edit Donor</h1>
    <form action="{{ route('donors.update', $donor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $donor->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $donor->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{ $donor->phone }}" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" class="form-control" value="{{ $donor->dob }}" required>
        </div>
        <div class="form-group">
            <label for="blood_type">Blood Type:</label>
            <input type="text" name="blood_type" class="form-control" value="{{ $donor->blood_type }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Donor</button>
    </form>
@endsection
