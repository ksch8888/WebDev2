<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->text('beschreibung');
            $table->date('datum');
            $table->time('beginn');
            //$table->date('updatedatum');
            $table->integer('locationId');
            $table->string('artist_id');
            //$table->integer('eventId');
            $table->timestamps();

        });

        Schema::create('artist_event', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');

            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
        Schema::dropIfExists('artists');
    }
}
