<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gb_passengers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('credit');
            $table->string('lastname');
            $table->string('fistname');
            $table->bigInteger('mobile');
            $table->bigInteger('phone')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('image');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->string('invitaionCode');
            $table->double('lastLat');
            $table->double('lastLon');
            $table->string('discountCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
