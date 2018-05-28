<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtributosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atributos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forca');
            $table->integer('destreza');
            $table->integer('inteligencia');
            $table->integer('sabedoria');
            $table->integer('constituicao');
            $table->integer('carisma');
            $table->integer('ficha_id')->references('id_ficha')->on('ficha');
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
