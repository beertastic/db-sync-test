<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaYachtPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia_yacht', function (Blueprint $table) {
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->integer('yacht_id')->unsigned()->index();
            $table->foreign('yacht_id')->references('id')->on('yacht')->onDelete('cascade');
            $table->primary(['multimedia_id', 'yacht_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('multimedia_yacht');
    }
}
