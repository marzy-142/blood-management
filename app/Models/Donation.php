<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'donor_id', // Foreign key referencing the donor
        'recipient_id', // Foreign key referencing the recipient
        'donation_date',
    ];

    // Define relationships
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function recipient()
    {
        return $this->belongsTo(Recipient::class);
    }
}
