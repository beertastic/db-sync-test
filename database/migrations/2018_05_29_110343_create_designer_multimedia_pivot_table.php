<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignerMultimediaPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer_multimedia', function (Blueprint $table) {
            $table->integer('designer_id')->unsigned()->index();
            $table->foreign('designer_id')->references('id')->on('designer')->onDelete('cascade');
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->primary(['designer_id', 'multimedia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designer_multimedia');
    }
}
