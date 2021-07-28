<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockerModificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocker_modifications', function (Blueprint $table) {
            $table->id('id');
            $table->string('titre_these');
            $table->longtext('objectif');
            $table->longtext('valeur_ajoute');
            $table->longtext('problematique');
            $table->longtext('resultats');
            $table->unsignedBigInteger('id_activite');
            $table->unsignedBigInteger('id_color');
            $table->foreign('id_activite')->references('id_activite')->on('activite_recentes');
            $table->foreign('id_color')->references('id')->on('background_colors');
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
        Schema::dropIfExists('stocker_modifications');
    }
}
