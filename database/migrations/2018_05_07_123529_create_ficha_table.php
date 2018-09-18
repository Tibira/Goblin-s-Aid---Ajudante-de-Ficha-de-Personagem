<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome_per')->nullable();
            $table->String('tendencia')->nullable();
            $table->double('deslocamento')->nullable();
            $table->integer('iniciativa')->nullable();
            $table->integer('classe_armadura')->nullable();
            $table->integer('pontos_vida_total')->nullable();
            $table->integer('pontos_vida_temporarios')->nullable();
            $table->integer('nivel')->nullable();
            $table->integer('bon_proficiencia')->nullable();
            $table->integer('experiencia')->nullable();
            $table->String('idiomas')->nullable();
            $table->integer('forca')->nullable();
            $table->integer('destreza')->nullable();
            $table->integer('inteligencia')->nullable();
            $table->integer('sabedoria')->nullable();
            $table->integer('carisma')->nullable();
            $table->integer('constituicao')->nullable();
            $table->String('tesouros')->nullable();
            $table->integer('pcobre')->nullable();
            $table->integer('pprata')->nullable();
            $table->integer('peletron')->nullable();
            $table->integer('pouro')->nullable();
            $table->integer('pplatina')->nullable();
            $table->integer('truques')->nullable();
            $table->integer('nivel1')->nullable();
            $table->integer('nivel2')->nullable();
            $table->integer('nivel3')->nullable();
            $table->integer('nivel4')->nullable();
            $table->integer('nivel5')->nullable();
            $table->integer('nivel6')->nullable();
            $table->integer('nivel7')->nullable();
            $table->integer('nivel8')->nullable();
            $table->integer('nivel9')->nullable();
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('classe_id')->references('id')->on('classes');
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
