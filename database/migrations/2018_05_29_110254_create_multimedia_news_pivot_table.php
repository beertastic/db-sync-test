<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaNewsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia_news', function (Blueprint $table) {
            $table->integer('multimedia_id')->unsigned()->index();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade');
            $table->integer('news_id')->unsigned()->index();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->primary(['multimedia_id', 'news_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('multimedia_news');
    }
}
