<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaHasTalentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_has_talentos', function (Blueprint $table) {
            $table->integer('talento_id')->references('id')->on('talentos');
            $table->integer('ficha_id')->references('id')->on('ficha');
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
