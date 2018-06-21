<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarinaMultimediaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marina_multimedia', function (Blueprint $table) {
            $table->integer('marina_id')->unsigned()->index();
            $table->foreign('marina_id')->references('id')->on('marina')->onDelete('cascade');
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->primary(['marina_id', 'multimedia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('marina_multimedia');
    }
}
