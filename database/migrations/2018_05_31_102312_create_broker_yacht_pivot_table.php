<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokerYachtPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker_yacht', function (Blueprint $table) {
            $table->integer('broker_id')->unsigned()->index();
            $table->foreign('broker_id')->references('id')->on('broker')->onDelete('cascade');
            $table->integer('yacht_id')->unsigned()->index();
            $table->foreign('yacht_id')->references('id')->on('yacht')->onDelete('cascade');
            $table->primary(['broker_id', 'yacht_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('broker_yacht');
    }
}
