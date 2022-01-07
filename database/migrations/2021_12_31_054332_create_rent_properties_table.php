<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_properties', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->string('description');
            $table->string('image');
            $table->unsignedBigInteger('pro_cat_id');
            $table->foreign('pro_cat_id')->references('id')->on('property_categories');
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->unsignedBigInteger('mun_id');
            $table->foreign('mun_id')->references('id')->on('municipalities');
            $table->string('ward');
            $table->string('street');
            $table->string('near_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rent_properties');
    }
}
