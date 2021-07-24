<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackgroundColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('background_colors', function (Blueprint $table) {
            $table->id('id');
            $table->string('clor_pro');
            $table->string('clor_res');
            $table->string('clor_va');
            $table->string('clor_obj');
            $table->string('clor_nameT');
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
        Schema::dropIfExists('background_colors');
    }
}
