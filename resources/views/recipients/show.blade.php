@extends('layouts.app')

@section('content')
    <h1>Recipient Details</h1>
    <p>Name: {{ $recipient->name }}</p>
    <p>Blood Type: {{ $recipient->blood_type }}</p>
    <p>Required Date: {{ $recipient->required_date }}</p>
    <a href="{{ route('recipients.index') }}" class="btn btn-primary">Back to Recipients</a>
@endsection
