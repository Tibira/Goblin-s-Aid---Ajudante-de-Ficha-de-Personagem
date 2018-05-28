<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talentos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome_tal');
            $table->String('descricao_tal',500);
            $table->String('pre_requisito_tal')->nullable();
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
