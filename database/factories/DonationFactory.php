<?php

namespace Database\Factories;

use App\Models\Donation;
use App\Models\Donor;
use App\Models\Recipient;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        return [
            'donor_id' => Donor::factory(), // Create a new donor if needed
            'recipient_id' => Recipient::factory(), // Create a new recipient if needed
            'donation_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
        ];
    }
}
