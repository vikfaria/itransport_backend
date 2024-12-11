<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
			$table->id();
			$table->foreignId('route_id')->constrained('routes')->onDelete('cascade'); // Must match routes.id
			$table->foreignId('vehicle_id')->constrained()->onDelete('cascade');
			$table->foreignId('driver_id')->default(1)->constrained()->onDelete('cascade'); // Provide a default driver_id
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->string('status');
			$table->dateTime('booking_date');
			$table->dateTime('pickup_date');
			$table->dateTime('dropoff_date');
			$table->timestamps();
		});
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};

