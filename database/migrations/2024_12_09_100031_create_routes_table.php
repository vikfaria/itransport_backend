<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('pickup_location_id')->constrained('locations')->onDelete('cascade'); // Foreign key to locations table
            $table->foreignId('dropoff_location_id')->constrained('locations')->onDelete('cascade'); // Foreign key to locations table
            $table->float('distance')->comment('Distance in kilometers'); // Distance of the route
            $table->time('estimated_time')->comment('Estimated time to complete the route'); // Estimated time
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
