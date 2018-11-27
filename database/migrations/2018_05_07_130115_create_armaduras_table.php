<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmadurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armaduras', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->String('descricao');
            $table->String('preco_armd');
            $table->double('peso_armd');
            $table->integer('class_armad');
            $table->integer('forca')->nullable();
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
