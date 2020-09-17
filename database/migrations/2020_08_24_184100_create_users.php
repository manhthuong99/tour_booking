<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('users_id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('fullname')->nullable();
            $table->text('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone_number')->nullable();
            $table->text('avatar')->nullable();
            $table->string('id_card')->nullable();
            $table->integer('status')->default(1);
            $table->integer('permission')->default(0);
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
        Schema::dropIfExists('users');
    }
}
