<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Reservation::class);
            $table->decimal('total_price', 10, 2);
            $table->text('note');
            $table->string('vnp_TmnCode');
            $table->string('vnp_TransactionNo');
            $table->string('vnp_BankCode');
            $table->string('vnp_PayDate')->comment('Day trading');
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
        Schema::dropIfExists('payments');
    }
};
