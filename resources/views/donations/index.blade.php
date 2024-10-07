@extends('layouts.app')

@section('content')
    <h1>Donations</h1>
    <a href="{{ route('donations.create') }}" class="btn btn-primary">Add Donation</a>
    <table class="table">
        <thead>
            <tr>
                <th>Donor Name</th>
                <th>Donation Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donations as $donation)
                <tr>
                    <td>{{ $donation->donor->name }}</td>
                    <td>{{ $donation->donation_date }}</td>
                    <td>
                        <a href="{{ route('donations.edit', $donation->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
