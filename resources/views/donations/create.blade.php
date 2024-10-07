<!-- resources/views/donations/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Make a Donation</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('donations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="donor_id">Donor</label>
            <select name="donor_id" id="donor_id" required>
                @foreach($donors as $donor)
                    <option value="{{ $donor->id }}">{{ $donor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="recipient_id">Recipient</label>
            <select name="recipient_id" id="recipient_id" required>
                @foreach($recipients as $recipient)
                    <option value="{{ $recipient->id }}">{{ $recipient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="donation_date">Donation Date</label>
            <input type="date" name="donation_date" id="donation_date" required>
        </div>

        <button type="submit">Save Donation</button>
    </form>
</div>
@endsection
