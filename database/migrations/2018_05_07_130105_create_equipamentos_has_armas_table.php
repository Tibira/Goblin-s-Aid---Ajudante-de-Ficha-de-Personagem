<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentosHasArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos_has_armas', function (Blueprint $table) {
            $table->integer('arma_id')->references('id')->on('armas');
            $table->integer('equipamento_id')->references('id')->on('equipamentos');
            $table->integer('quantidade');
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
