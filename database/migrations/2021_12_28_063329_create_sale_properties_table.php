<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('property_category');
            $table->string('price');
            $table->string('description');
            $table->string('image');
            $table->unsignedBigInteger('pro_cat_id');
            $table->foreign('pro_cat_id')->references('id')->on('property_categories');
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
        Schema::dropIfExists('sale_properties');
    }
}
