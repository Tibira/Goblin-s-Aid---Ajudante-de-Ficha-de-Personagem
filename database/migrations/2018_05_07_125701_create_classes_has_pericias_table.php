<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesHasPericiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_has_pericias', function (Blueprint $table) {
            $table->integer('pericia_id')->references('id')->on('pericias');
            $table->integer('classe_id')->references('id')->on('classes');
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
