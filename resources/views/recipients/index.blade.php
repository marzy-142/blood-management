@extends('layouts.app')

@section('content')
    <h1>Recipients</h1>
    <a href="{{ route('recipients.create') }}" class="btn btn-primary">Add Recipient</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Blood Type</th>
                <th>Required Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recipients as $recipient)
                <tr>
                    <td>{{ $recipient->name }}</td>
                    <td>{{ $recipient->blood_type }}</td>
                    <td>{{ $recipient->required_date }}</td>
                    <td>
                        <a href="{{ route('recipients.edit', $recipient->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('recipients.destroy', $recipient->id) }}" method="POST" style="display:inline;">
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
