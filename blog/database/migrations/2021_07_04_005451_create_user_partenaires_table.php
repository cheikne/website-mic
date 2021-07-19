<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_partenaires', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_user');
            $table->string('prenom_user');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('urlImg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_partenaires');
    }
}
