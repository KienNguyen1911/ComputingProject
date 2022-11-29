<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Reservation;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();

            // $table->unsignedInteger('id');
            // $table->foreign('id')->references('id')->on('users')->nullable();
            // $table->unsignedInteger('reservation_id');
            // $table->foreign('reservation_id')->references('reservation_id')->on('reservation')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Reservation::class)->nullable();

            $table->string('feedback_time')->nullable();
            $table->string('feedback_rating')->nullable();
            $table->text('feedback_content')->nullable();
            $table->string('feedback_image_1')->nullable();
            $table->string('feedback_image_2')->nullable();
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
        Schema::dropIfExists('feedbacks');
    }
};
