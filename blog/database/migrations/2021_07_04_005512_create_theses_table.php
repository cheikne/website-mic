<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->id('id_these');
            $table->string('titre_these');
            $table->longtext('objectif');
            $table->longtext('valeur_ajoute');
            $table->string('nom_thesard');
            $table->string('Encadrant');
            $table->longtext('Problematique');
            $table->string('img');
            $table->longtext('Resume');
            $table->timestamps($presition =0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theses');
    }
}
