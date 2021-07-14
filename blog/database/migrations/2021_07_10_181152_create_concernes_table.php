<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcernesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concernes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_inst');
            $table->unsignedBigInteger('id_actu');
            $table->foreign('id_actu')->references('id_actu')->on('actualites');
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
        Schema::dropIfExists('concernes');
    }
}
