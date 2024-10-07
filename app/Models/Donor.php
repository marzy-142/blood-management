<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'blood_type',
    ];

    // Define the relationship to donations
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
