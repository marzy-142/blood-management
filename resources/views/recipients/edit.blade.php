@extends('layouts.app')

@section('content')
    <h1>Edit Recipient</h1>
    <form action="{{ route('recipients.update', $recipient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $recipient->name }}" required>
        </div>
        <div class="form-group">
            <label for="blood_type">Blood Type:</label>
            <input type="text" name="blood_type" class="form-control" value="{{ $recipient->blood_type }}" required>
        </div>
        <div class="form-group">
            <label for="required_date">Required Date:</label>
            <input type="date" name="required_date" class="form-control" value="{{ $recipient->required_date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Recipient</button>
    </form>
@endsection
