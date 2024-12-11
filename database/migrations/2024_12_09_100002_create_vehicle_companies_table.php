<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicle_companies', function (Blueprint $table) {
			$table->id();
			$table->string('name'); // Ensure the 'name' column is defined
			$table->string('address')->nullable();
			$table->string('phone_number')->nullable();
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_companies');
    }
};

