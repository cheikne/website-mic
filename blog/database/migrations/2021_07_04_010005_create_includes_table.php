<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('includes', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_these');
            $table->foreign('id_these')->references('id_these')->on('theses');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('user_partenaires');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('includes');
    }
}
