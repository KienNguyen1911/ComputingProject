<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Runner\Hook;
use App\Models\Home;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('home_id');
            // $table->foreign('home_id')->references('id')->on('homes');
            $table->foreignIdFor(Home::class);
            // $table->unsignedInteger('id');
            // $table->foreign('id')->references('id')->on('users');
            $table->foreignIdFor(User::class);
            $table->date('start');
            $table->date('end');
            $table->float('total_price');
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
        Schema::dropIfExists('reservation');
    }
};
