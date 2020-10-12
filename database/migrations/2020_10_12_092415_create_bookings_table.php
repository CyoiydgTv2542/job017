<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency');
            $table->string('fname');
            $table->string('lname');
            $table->string('rank');
            $table->integer('pnum');
            $table->integer('numpeople');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('even');
            $table->string('pattern');
            $table->string('advice');
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
        Schema::dropIfExists('bookings');
    }
}
