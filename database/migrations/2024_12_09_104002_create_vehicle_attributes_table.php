<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vehicle_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->string('attribute_name');
            $table->string('attribute_value');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_attributes');
    }
};

