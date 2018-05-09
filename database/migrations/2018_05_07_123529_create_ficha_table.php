<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->increments('id_ficha');
            $table->double('deslocamento');
            $table->integer('iniciativa');
            $table->integer('classe_armadura');
            $table->integer('pontos_vida_total');
            $table->integer('pontos_vida_temporarios');
            $table->integer('nivel');
            $table->integer('bon_proficiencia');
            $table->String('tendencia');
            $table->integer('experiencia')->nullable();
            $table->String('idiomas')->nullable();
            $table->String('tesouros')->nullable();
            $table->integer('pcobre')->nullable();
            $table->integer('pprata')->nullable();
            $table->integer('peletron')->nullable();
            $table->integer('pouro')->nullable();
            $table->integer('pplatina')->nullable();
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
