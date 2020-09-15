<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkTransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transport', function (Blueprint $table) {
            $table->foreign('id_tours')->references('tours_id')->on('tours');
            $table->foreign('id_transport_detail')->references('transport_detail_id')->on('transport_detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transport', function (Blueprint $table) {
            //
        });
    }
}
