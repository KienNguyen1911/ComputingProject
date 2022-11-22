<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

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
            
            $table->foreignIdFor(Type::class);
            // $table->foreignIdFor(Service::class)->json_encode()->nullable();
            $table->string('service')->nullable();
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
