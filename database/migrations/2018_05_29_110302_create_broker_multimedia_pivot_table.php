<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokerMultimediaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker_multimedia', function (Blueprint $table) {
            $table->integer('broker_id')->unsigned()->index();
            $table->foreign('broker_id')->references('id')->on('broker')->onDelete('cascade');
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->primary(['broker_id', 'multimedia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('broker_multimedia');
    }
}
