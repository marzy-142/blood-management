<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    // Display a listing of the donors
    public function index()
    {
        $donors = Donor::all();
        return view('donors.index', compact('donors'));
    }

    // Show the form for creating a new donor
    public function create()
    {
        return view('donors.create');
    }

    // Store a newly created donor in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:donors,email',
            'phone' => 'required|unique:donors,phone',
            'dob' => 'required|date',
            'blood_type' => 'required',
        ]);

        Donor::create($request->all());
        Donor::destroy($request->donor_id);
        return redirect()->route('donors.index')->with('success', 'Donor added successfully.');
    }

    // Display the specified donor
    public function show(Donor $donor)
    {
        return view('donors.show', compact('donor'));
    }

    // Show the form for editing the specified donor
    public function edit(Donor $donor)
    {
        return view('donors.edit', compact('donor'));
    }

    // Update the specified donor in storage
    public function update(Request $request, Donor $donor)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:donors,email,' . $donor->id,
            'phone' => 'required|unique:donors,phone,' . $donor->id,
            'dob' => 'required|date',
            'blood_type' => 'required',
        ]);

        $donor->update($request->all());

        return redirect()->route('donors.index')->with('success', 'Donor updated successfully.');
    }

    // Remove the specified donor from storage
    public function destroy(Donor $donor)
    {
        $donor->delete();

        return redirect()->route('donors.index')->with('success', 'Donor deleted successfully.');
    }
}
