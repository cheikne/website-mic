<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffectuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('effectuers', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_inst');
            $table->unsignedBigInteger('id_visite');
            $table->foreign('id_visite')->references('id_visite')->on('visites');
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
        Schema::dropIfExists('effectuers');
    }
}
