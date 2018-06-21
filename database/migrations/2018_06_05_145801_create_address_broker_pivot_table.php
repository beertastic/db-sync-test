<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressBrokerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_broker', function (Blueprint $table) {
            $table->integer('address_id')->unsigned()->index();
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
            $table->integer('broker_id')->unsigned()->index();
            $table->foreign('broker_id')->references('id')->on('broker')->onDelete('cascade');
            $table->primary(['address_id', 'broker_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_broker');
    }
}
