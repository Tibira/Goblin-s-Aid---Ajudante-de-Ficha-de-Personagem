<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->String('descricao');
            $table->String('tipo_arm');
            $table->String('preco_arm');
            $table->double('peso_arm'); 
            $table->String('dano_arm');
            $table->String('propiedade')->nullable();
            $table->String('efeito_adicional')->nullable();
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
