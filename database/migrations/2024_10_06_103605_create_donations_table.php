<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
        public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donor_id')->constrained()->onDelete('cascade');
            $table->foreignId('recipient_id')->constrained()->onDelete('cascade'); // Added recipient_id foreign key
            $table->date('donation_date');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
