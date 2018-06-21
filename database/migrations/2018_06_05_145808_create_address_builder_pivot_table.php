<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressBuilderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_builder', function (Blueprint $table) {
            $table->integer('address_id')->unsigned()->index();
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
            $table->integer('builder_id')->unsigned()->index();
            $table->foreign('builder_id')->references('id')->on('builder')->onDelete('cascade');
            $table->primary(['address_id', 'builder_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_builder');
    }
}
