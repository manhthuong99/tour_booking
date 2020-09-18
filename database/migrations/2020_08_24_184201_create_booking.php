<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->integer('id_users')->unsigned();
            $table->integer('id_tours')->unsigned();
            $table->integer('number_customer');
            $table->double('total')->nullable();
            $table->integer('booking_status')->default(1);
            $table->dateTime('confirm_at')->nullable();
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
        Schema::dropIfExists('booking');
    }
}
