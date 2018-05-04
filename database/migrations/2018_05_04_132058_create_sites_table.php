<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id', 11)->unsigned();
            $table->string('name',255)->index();
            $table->string('name_en',255)->index()->nullable();
            $table->text('address')->nullable();
            $table->text('main_img')->nullable();
            $table->mediumText('introtext')->nullable();
            $table->longText('text')->nullable();
            $table->decimal('price', 6, 2)->nullable();
            $table->text('open_hours')->nullable();
            $table->integer('city_id')->unsigned()->index();

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
        Schema::dropIfExists('sites');
    }
}
