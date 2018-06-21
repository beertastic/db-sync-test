<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsYachtPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_yacht', function (Blueprint $table) {
            $table->integer('news_id')->unsigned()->index();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->integer('yacht_id')->unsigned()->index();
            $table->foreign('yacht_id')->references('id')->on('yacht')->onDelete('cascade');
            $table->primary(['news_id', 'yacht_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_yacht');
    }
}
