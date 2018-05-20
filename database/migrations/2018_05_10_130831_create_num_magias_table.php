<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumMagiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('num_magias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('truques')->nullable();
            $table->integer('nivel1')->nullable();
            $table->integer('nivel2')->nullable();
            $table->integer('nivel3')->nullable();
            $table->integer('nivel4')->nullable();
            $table->integer('nivel5')->nullable();
            $table->integer('nivel6')->nullable();
            $table->integer('nivel7')->nullable();
            $table->integer('nivel8')->nullable();
            $table->integer('nivel9')->nullable();
            $table->integer('classe_id')->references('id')->on('classes');
            $table->integer('nivel')->references('nivel')->on('ficha_has_classes');
            $table->timestamps();
            $table->Boolean('vis');
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
