<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechercheScientifiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recherche_scientifiques', function (Blueprint $table) {
            $table->id('id_rech');
            $table->longtext('resume');
            $table->longtext('lien');
            $table->unsignedBigInteger('id_these');
            $table->foreign('id_these')->references('id_these')->on('theses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recherche_scientifiques');
    }
}
