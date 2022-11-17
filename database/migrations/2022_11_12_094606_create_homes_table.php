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
            $table->id();

            // $table->unsignedInteger('type_id');
            // $table->foreign('type_id')->references('id')->on('types')->nullable();
            // $table->unsignedInteger('service_id');
            // $table->foreign('service_id')->references('service_id')->on('services')->nullable();
            // $table->unsignedInteger('discount_id');
            // $table->foreign('discount_id')->references('discount_id')->on('discounts')->nullable();
            
            $table->string('home_name');
            $table->text('home_description');
            $table->string('home_address');
            $table->decimal('home_price',8,2);
            $table->string('home_status');
            $table->integer('home_capacity');
            $table->decimal('home_rating');

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
