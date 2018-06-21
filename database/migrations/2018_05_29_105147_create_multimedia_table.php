<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultimediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('name', 255);
            $table->string('name_md5', 32);
            $table->string('file_ext', 4);
            $table->string('path', 255);
            $table->longText('description');
            $table->tinyInteger('type'); // ID representation of: Image, video, deckplan, brochure, other?
            $table->integer('size'); // file size
            $table->integer('duration');
            $table->integer('width');
            $table->integer('height');
            $table->integer('aspect_height');
            $table->integer('aspect_width');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multimedia');
    }
}
