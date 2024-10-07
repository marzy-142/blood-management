@extends('layouts.app')

@section('content')
    <h1>Add Recipient</h1>
    <form action="{{ route('recipients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="blood_type">Blood Type:</label>
            <input type="text" name="blood_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="required_date">Required Date:</label>
            <input type="date" name="required_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Recipient</button>
    </form>
@endsection
