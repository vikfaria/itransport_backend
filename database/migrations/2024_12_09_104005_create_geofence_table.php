<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('geofence', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('coordinates'); // Store as JSON or WKT
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('geofence');
    }
};

