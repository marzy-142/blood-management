@extends('layouts.app')

@section('content')
    <h1>Add Donor</h1>
    <form action="{{ route('donors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="blood_type">Blood Type:</label>
            <input type="text" name="blood_type" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Donor</button>
    </form>
@endsection
