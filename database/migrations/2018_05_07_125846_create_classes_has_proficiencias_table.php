<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesHasProficienciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_has_proficiencias', function (Blueprint $table) {
            $table->integer('classe_id')->references('id')->on('classes');
            $table->integer('proficiencia_id')->references('id')->on('proficiencias');
            $table->timestamps();
            $table->Boolean('vis')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
