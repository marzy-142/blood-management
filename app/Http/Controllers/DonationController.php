<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use App\Models\Recipient;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    // Display a listing of the donations
    public function index()
    {
        $donations = Donation::with('donor', 'recipient')->get();
        return view('donations.index', compact('donations'));
    }

    // Show the form for creating a new donation
    public function create()
    {
        $donors = Donor::all();
        $recipients = Recipient::all();
        return view('donations.create', compact('donors', 'recipients'));
    }

    // Store a newly created donation in storage
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'donor_id' => 'required|exists:donors,id',
        'recipient_id' => 'required|exists:recipients,id',
        'donation_date' => 'required|date',
    ]);

    // Retrieve the donor and recipient records
    $donor = Donor::find($request->donor_id);
    $recipient = Recipient::find($request->recipient_id);

    // Check if the blood types match
    if ($donor->blood_type !== $recipient->blood_type) {
        return redirect()->back()->withErrors('The donor and recipient blood types do not match.');
    }

    // Create a new donation record
    $donation = Donation::create([
        'donor_id' => $request->donor_id,
        'recipient_id' => $request->recipient_id,
        'donation_date' => $request->donation_date,
    ]);

    // Remove the donor and recipient after saving (optional, as per your original code)
    // Donor::destroy($request->donor_id);
    // Recipient::destroy($request->recipient_id);

    // Redirect to the success page with the donation ID
    return redirect()->route('donations.success', ['id' => $donation->id])->with('success', 'Donation recorded successfully.');
}

    public function success($id)
    {
        $donation = Donation::find($id);
        if (!$donation) {
            return redirect()->route('home')->withErrors('Donation not found.');
        }
        return view('donations.success', compact('donation'));
    }

    // Show the form for editing the specified donation
    public function edit(Donation $donation)
    {
        $donors = Donor::all();
        $recipients = Recipient::all();
        return view('donations.edit', compact('donation', 'donors', 'recipients'));
    }

    // Update the specified donation in storage
    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'donor_id' => 'required|exists:donors,id',
            'recipient_id' => 'required|exists:recipients,id',
            'donation_date' => 'required|date',
        ]);

        $donation->update($request->all());

        return redirect()->route('donations.index')->with('success', 'Donation updated successfully.');
    }

    // Remove the specified donation from storage
    public function destroy(Donation $donation)
    {
        $donation->delete();

        return redirect()->route('donations.index')->with('success', 'Donation deleted successfully.');
    }
}
