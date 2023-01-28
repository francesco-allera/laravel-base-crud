<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('appearance', 100);
            $table->string('taste', 100);
            $table->string('style', 100)->nullable();
            $table->boolean('gluten_free')->nullable();
            $table->string('nation', 3);
            $table->tinyInteger('cL');
            $table->float('alcohol', 4,2);
            $table->float('price', 4,2);
            $table->string('img_url', 2048);
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
        Schema::dropIfExists('beers');
    }
}
