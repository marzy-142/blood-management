<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    // Display a listing of the recipients
    public function index()
    {
        $recipients = Recipient::all();
        return view('recipients.index', compact('recipients'));
    }

    // Show the form for creating a new recipient
    public function create()
    {
        return view('recipients.create');
    }

    // Store a newly created recipient in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'blood_type' => 'required',
            'required_date' => 'required|date',
        ]);

        Recipient::create($request->all());

        return redirect()->route('recipients.index')->with('success', 'Recipient added successfully.');
    }

    // Display the specified recipient
    public function show(Recipient $recipient)
    {
        return view('recipients.show', compact('recipient'));
    }

    // Show the form for editing the specified recipient
    public function edit(Recipient $recipient)
    {
        return view('recipients.edit', compact('recipient'));
    }

    // Update the specified recipient in storage
    public function update(Request $request, Recipient $recipient)
    {
        $request->validate([
            'name' => 'required',
            'blood_type' => 'required',
            'required_date' => 'required|date',
        ]);

        $recipient->update($request->all());
        Recipient::destroy($request->recipient_id);
        return redirect()->route('recipients.index')->with('success', 'Recipient updated successfully.');
    }

    // Remove the specified recipient from storage
    public function destroy(Recipient $recipient)
    {
        $recipient->delete();

        return redirect()->route('recipients.index')->with('success', 'Recipient deleted successfully.');
    }
}
