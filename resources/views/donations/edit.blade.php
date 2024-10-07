@extends('layouts.app')

@section('content')
    <h1>Edit Donation</h1>
    <form action="{{ route('donations.update', $donation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="donor_id">Donor:</label>
            <select name="donor_id" class="form-control" required>
                @foreach($donors as $donor)
                    <option value="{{ $donor->id }}" {{ $donor->id == $donation->donor_id ? 'selected' : '' }}>{{ $donor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="donation_date">Donation Date:</label>
            <input type="date" name="donation_date" class="form-control" value="{{ $donation->donation_date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Donation</button>
    </form>
@endsection
