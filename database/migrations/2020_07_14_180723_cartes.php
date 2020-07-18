<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cartes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes',function(Blueprint $table){
            $table->increments('id');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('ufrs_id')->unsigned();
            $table->foreign('ufrs_id')->references('id')->on('ufrs')->onDelete('cascade');
            $table->integer('filiere_us_id')->unsigned();
            $table->foreign('filiere_us_id')->references('id')->on('filiere_us')->onDelete('cascade');
            $table->integer('cycles_id')->unsigned();
            $table->foreign('cycles_id')->references('id')->on('cycles')->onDelete('cascade');
            $table->integer('niveaux_id')->unsigned();
            $table->foreign('niveaux_id')->references('id')->on('niveaux')->onDelete('cascade');
            $table->integer('anne_academiques_id')->unsigned();
            $table->foreign('anne_academiques_id')->references('id')->on('anne_academiques')->onDelete('cascade');
            $table->integer('nationalites_id')->unsigned();
            $table->foreign('nationalites_id')->references('id')->on('nationalites')->onDelete('cascade');
            $table->string('email');
            $table->string('tuteur');
            $table->text('photo');
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
        Schema::dropIfExists('cartes');
    }
}
