<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualites', function (Blueprint $table) {
            $table->id('id_actu');
            $table->longtext('titre');
            $table->date('date');
            $table->longtext('context');
            $table->string('urlImg');
            $table->unsignedBigInteger('id_inst');
            $table->foreign('id_inst')->references('id_inst')->on('instituts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actualites');
    }
}
