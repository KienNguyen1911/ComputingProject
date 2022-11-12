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
        Schema::create('home_image', function (Blueprint $table) {
            $table->increments('home_image_id');
            $table->unsignedInteger('home_id');
            $table->foreign('home_id')->references('home_id')->on('homes');
            $table->unsignedInteger('image_id');
            $table->foreign('image_id')->references('image_id')->on('images');
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
        Schema::dropIfExists('home_image');
    }
};
