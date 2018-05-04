<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('durations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_from')->index();
            $table->date('date_till')->index();
            $table->decimal('expenses', 6, 2)->index()->nullable();
            $table->integer('country_id')->unsigned()->index()->nullable();
            $table->integer('city_id')->unsigned()->index()->nullable();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('durations');
    }
}
