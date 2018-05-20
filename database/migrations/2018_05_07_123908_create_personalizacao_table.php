<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalizacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalizacao', function (Blueprint $table) {
            $table->increments('id');
                $table->String('ligacoes')->nullable();
                $table->String('tracos_personal')->nullable();
                $table->String('ideal')->nullable();
                $table->String('defeito')->nullable();
                $table->String('cabelo')->nullable();
                $table->String('olhos')->nullable();
                $table->double('altura')->nullable();
                $table->String('pele')->nullable();
                $table->double('peso')->nullable();
                $table->String('aliados')->nullable();
                $table->String('historia')->nullable();
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
