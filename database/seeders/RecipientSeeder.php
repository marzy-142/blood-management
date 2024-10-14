<?php

namespace Database\Seeders;

use App\Models\Recipient;
use Illuminate\Database\Seeder;

class RecipientSeeder extends Seeder
{
    public function run()
    {
        Recipient::factory()->count(30)->create(); // Create 30 recipients
    }
}

