@extends('layouts.app')

@section('content')
    <h1>Donors</h1>
    <a href="{{ route('donors.create') }}" class="btn btn-primary">Add Donor</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Blood Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($donors as $donor)
                <tr>
                    <td>{{ $donor->name }}</td>
                    <td>{{ $donor->email }}</td>
                    <td>{{ $donor->phone }}</td>
                    <td>{{ $donor->dob }}</td>
                    <td>{{ $donor->blood_type }}</td>
                    <td>
                        <a href="{{ route('donors.edit', $donor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('donors.destroy', $donor->id) }}" method="POST" style="display:inline;">
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
