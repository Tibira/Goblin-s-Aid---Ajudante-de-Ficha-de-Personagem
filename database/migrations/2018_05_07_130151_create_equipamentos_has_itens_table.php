<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipamentosHasItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos_has_itens', function (Blueprint $table) {
            $table->integer('item_id')->references('id')->on('itens');
            $table->integer('equipamento_id')->references('id')->on('equipamentos');
            $table->integer('quantidade');
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
