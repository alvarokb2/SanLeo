<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('observacion');

            $table->integer('id_area')->unsigned();
            $table->foreign('id_area')->references('id')->on('areas');


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
        Schema::dropIfExists('subareas');
    }
}
