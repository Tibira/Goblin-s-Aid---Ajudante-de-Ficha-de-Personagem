<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magias', function (Blueprint $table) {
            $table->increments('id_magia');
            $table->String('nome_mag');
            $table->String('descricao_mag');
            $table->String('conjuradores_mag');
            $table->integer('nivel_mag');
            $table->String('escola_mag');
            $table->String('tempo_mag');
            $table->String('componentes_mag');
            $table->String('alcance_mag');
            $table->String('duracao_mag');
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
