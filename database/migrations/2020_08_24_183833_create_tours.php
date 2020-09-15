<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('tours_id');
            $table->string('tours_name');
            $table->text('description')->nullable();
            $table->double('price');
            $table->float('day_number');
            $table->integer('destination');
            $table->integer('id_district')->nullable()->unsigned();
            $table->integer('id_province')->nullable()->unsigned();
            $table->date('calendar');
            $table->text('image');
            $table->double('discount')->default(0);
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
//        Schema::table('tours', function($table)
//        {
//            $table->foreign('id_category')->references('id')->on('category');
//            $table->foreign('id_destination')->references('id')->on('destination');
//        });
    }
}
