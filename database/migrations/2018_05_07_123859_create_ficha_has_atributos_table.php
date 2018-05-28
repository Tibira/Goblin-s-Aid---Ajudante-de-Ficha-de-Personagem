<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaHasAtributosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_has_atributos', function (Blueprint $table) {
            $table->integer('atributos_id')->references('id')->on('atributos');
            $table->integer('ficha_id')->references('id')->on('ficha');
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
