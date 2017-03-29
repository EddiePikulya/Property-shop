<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property');
            $table->integer('price');
            $table->string('address');
            $table->string('agent_name');
            $table->string('main_photo');
            $table->integer('agent_phone');
            $table->integer('bed_rooms');
            $table->integer('living_rooms');
            $table->integer('parking');
            $table->integer('kitchens');
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
        Schema::dropIfExists('houses');
    }
}
