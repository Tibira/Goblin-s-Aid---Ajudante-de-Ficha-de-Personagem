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
            $table->integer('personalizacao_id')->references('id')->on('personalizacao');
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
