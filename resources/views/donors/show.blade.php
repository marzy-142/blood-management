@extends('layouts.app')

@section('content')
    <h1>Donor Details</h1>
    <p>Name: {{ $donor->name }}</p>
    <p>Email: {{ $donor->email }}</p>
    <p>Phone: {{ $donor->phone }}</p>
    <p>Date of Birth: {{ $donor->dob }}</p>
    <p>Blood Type: {{ $donor->blood_type }}</p>
    <a href="{{ route('donors.index') }}" class="btn btn-primary">Back to Donors</a>
@endsection
