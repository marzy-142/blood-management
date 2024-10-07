<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipientsTable extends Migration
{
    public function up()
    {
        Schema::create('recipients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('blood_type'); // Blood type of the recipient
            $table->date('required_date'); // Date when blood is required
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipients');
    }
}
