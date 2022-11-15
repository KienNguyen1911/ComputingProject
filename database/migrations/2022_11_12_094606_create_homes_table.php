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
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('home_id');

            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('types')->nullable();
            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('service_id')->on('services')->nullable();
            $table->unsignedInteger('discount_id');
            $table->foreign('discount_id')->references('discount_id')->on('discounts')->nullable();
            
            $table->string('home_name')->nullable();
            $table->text('home_description')->nullable();
            $table->string('home_address')->nullable();
            // $table->string('home_type')->nullable();
            $table->float('home_price')->nullable();
            // $table->string('home_image')->nullable();
            $table->string('home_status')->nullable();
            $table->string('home_capacity')->nullable();
            $table->string('home_rating')->nullable();

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
        Schema::dropIfExists('homes');
    }
};
