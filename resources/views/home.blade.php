<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="homepage">
    <h1>Welcome to BloodLink</h1>
    <p>
        Our application helps manage blood donations efficiently and connects donors with recipients in need. 
        Whether you're a donor looking to give blood or a recipient seeking blood, this platform is designed to facilitate the entire process.
    </p>

    <h2>Features</h2>
    <ul>
        <li>Register as a donor and manage your information</li>
        <li>Request blood as a recipient</li>
        <li>Track donation history</li>
        <li>Stay informed about blood donation events</li>
    </ul>

    <h2>Join Us Today!</h2>
    <p>
        Be a part of the community that saves lives. 
        <a href="{{ route('donors.create') }}" class="button">Become a Donor</a>
    </p>

    <footer>
        <p>&copy; {{ date('Y') }} Blood Donation Management App. All Rights Reserved.</p>
    </footer>
</div>
@endsection
