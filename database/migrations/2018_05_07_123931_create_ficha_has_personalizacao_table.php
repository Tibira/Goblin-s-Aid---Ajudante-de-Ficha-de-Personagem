<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaHasPersonalizacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_has_personalizacao', function (Blueprint $table) {
            $table->integer('personalizacao_ID')->references('id_personalizacao')->on('personalizacao');
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
