<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaHasAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_has_antecedentes', function (Blueprint $table) {
            $table->integer('antecedente_ID')->references('id_antecedente')->on('antecedentes');
            $table->integer('ficha_ID')->references('id_ficha')->on('ficha');
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
        //
    }
}
