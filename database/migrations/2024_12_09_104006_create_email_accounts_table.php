<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('email_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('email_address')->unique();
            $table->string('smtp_server');
            $table->integer('smtp_port');
            $table->string('smtp_username');
            $table->string('smtp_password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_accounts');
    }
};

