<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 4);
            $table->timestamps();
        });

        Schema::create('bartenders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_id');
            $table->char('mac_id', 17);
            $table->string('location_id')->nullable();
            $table->unsignedBigInteger('bartender_id');
            $table->unsignedBigInteger('beverage_id');
            $table->boolean('enabled');
            $table->timestamps();

            $table->foreign('bartender_id')->references('id')->on('bartenders');
            $table->foreign('beverage_id')->references('id')->on('beverages');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('status');
            $table->unsignedBigInteger('bartender_id');
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('beverage_id');
            $table->string('location');
            $table->timestamps();

            $table->foreign('bartender_id')->references('id')->on('bartenders');
            $table->foreign('device_id')->references('id')->on('devices');
            $table->foreign('beverage_id')->references('id')->on('beverages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('devices');
        Schema::dropIfExists('bartenders');
        Schema::dropIfExists('beverages');
    }
}
