<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gb_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('rate');
            $table->integer('driver_id');
            $table->integer('passenger_id');
            $table->timestamps();
            $table->foreign(['driver_id','passenger_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
