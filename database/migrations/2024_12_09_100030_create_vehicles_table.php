<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
        $table->id(); // Creates an unsigned big integer
        $table->foreignId('vehicle_type_id')->constrained('vehicle_types')->onDelete('cascade');
        $table->foreignId('vehicle_company_id')->constrained('vehicle_companies')->onDelete('cascade');
        $table->string('name');
        $table->string('license_plate')->unique();
        $table->string('model');
        $table->integer('capacity');
        $table->enum('status', ['available', 'unavailable'])->default('available');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};

