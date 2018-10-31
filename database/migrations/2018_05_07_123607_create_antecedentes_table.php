<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->String('descricao',1000);
            $table->String('itens_ant');
            $table->String('pericias_ant');
            $table->String('proficiencias_ant');
            $table->String('idiomas_ant')->nullable();
            $table->String('carac_extras_ant');
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
