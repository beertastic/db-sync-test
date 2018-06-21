<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legacy_id')->default(0);
            $table->string('legacy_type', 25)->nullable();
            $table->integer('address_type')->default(0);
            $table->integer('group_id')->default(0);
            $table->string('tel')->nullable();;
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('dept_name')->nullable();
            $table->string('address_0')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
            $table->string('address_4')->nullable();
            $table->string('address_5')->nullable();
            $table->string('address_6')->nullable();
            $table->string('address_7')->nullable();
            $table->string('address_8')->nullable();
            $table->string('address_9')->nullable();
            $table->string('address_10')->nullable();
            $table->string('address_11')->nullable();
            $table->string('address_12')->nullable();
            $table->string('address_13')->nullable();
            $table->string('address_14')->nullable();
            $table->string('address_15')->nullable();
            $table->string('address_16')->nullable();
            $table->integer('country_id')->nullable()->default(0);

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
        Schema::dropIfExists('address');
    }
}