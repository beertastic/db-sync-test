<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYachtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yacht', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('legacy_id')->default(0);
            $table->boolean('sale')->default(false);
            $table->boolean('charter')->default(false);
            $table->string('name', 255)->nullable();
            $table->integer('status')->default(0); // custom, active, broker, concept, sale etc
//            $table->xxxx('type');
//            $table->xxxx('subtype');
//            $table->xxxx('model');
//            $table->xxxx('builder');
//            $table->xxxx('architect');
//            $table->xxxx('designer_int');
//            $table->xxxx('designer_ext');
//            $table->xxxx('year');
//            $table->xxxx('flag');
//            $table->xxxx('mca');
//            $table->xxxx('class');
//            $table->xxxx('hull_nb');
//            $table->xxxx('hull_color');
//            $table->xxxx('length');
//            $table->xxxx('length_waterline');
//            $table->xxxx('beam');
//            $table->xxxx('draft_min');
//            $table->xxxx('draft_max');
//            $table->xxxx('gross_tonnage');
//            $table->xxxx('hull_conf');
//            $table->xxxx('hull_material');
//            $table->xxxx('superstructure');
//            $table->xxxx('deck_material');
//            $table->xxxx('deck_nb');
//            $table->xxxx('accom_guests');
//            $table->xxxx('accom_cabins_total');
//            $table->xxxx('accom_cabins');
//            $table->xxxx('accom_crew');
//            $table->xxxx('engine_qty');
//            $table->xxxx('engine_fuel');
//            $table->xxxx('engine_manf');
//            $table->xxxx('engine_model');
//            $table->xxxx('engine_power');
//            $table->xxxx('engine_power_total');
//            $table->xxxx('engine_propulsion');
//            $table->xxxx('speed_max');
//            $table->xxxx('speed_cruise');
//            $table->xxxx('range');
//            $table->xxxx('fuel_cap');
//            $table->xxxx('water_cap');
//            $table->xxxx('generator');
//            $table->xxxx('stabaliser');
//            $table->xxxx('thrusters');
//            $table->xxxx('amenities');
//            $table->xxxx('');
//            $table->xxxx('');
//            $table->xxxx('');

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
        Schema::dropIfExists('yacht');
    }
}
