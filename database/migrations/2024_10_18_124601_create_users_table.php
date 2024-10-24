<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name')->nullable(); // User's name
            $table->string('email')->unique()->nullable(); // User's email
            $table->string('otp')->nullable(); // OTP code
            $table->timestamp('otp_expires_at')->nullable(); // OTP expiry time
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}