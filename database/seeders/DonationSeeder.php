<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    public function run()
    {
        Donation::factory()->count(20)->create(); // Create 20 donations
    }
}

