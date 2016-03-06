<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('family_name');
            $table->string('given_name');
            $table->string('family_name_furigana');
            $table->string('given_name_furigana');
            $table->string('prefecture');
            $table->integer('age', false, true);
            $table->string('sex');
            $table->string('attribute');
            $table->text('best_technique');
            $table->integer('recommendation_ranking');
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
        Schema::drop('profiles');
    }
}
