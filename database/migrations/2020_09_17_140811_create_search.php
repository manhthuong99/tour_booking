<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search', function (Blueprint $table) {
            $table->increments('search_id');
            $table->integer('id_users')->unsigned()->nullable();
            $table->string('searchs');
            $table->foreign('id_users')->references('users_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('search');
    }
}
