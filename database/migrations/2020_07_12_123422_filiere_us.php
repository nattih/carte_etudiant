<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FiliereUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_us',function(Blueprint $table){
            $table->increments('id');
            $table->string('nom');
            $table->integer('ufrs_id')->unsigned();
            $table->foreign('ufrs_id')->references('id')->on('ufrs')->onDelete('cascade');
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
        Schema::dropIfExists('filiere_us');
    }
}
