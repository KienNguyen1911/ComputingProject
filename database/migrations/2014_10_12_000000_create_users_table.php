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
            $table->increments('user_id');
            $table->string('google_id')->unique()->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password')->nullable();
            $table->string('user_role')->nullable();
            $table->string('user_phonenumber')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_image')->nullable()->nullable();
            $table->rememberToken();
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
