<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('is_admin');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('blood_group')->nullable();
            $table->longText('address')->nullable();
            $table->string('pin')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
