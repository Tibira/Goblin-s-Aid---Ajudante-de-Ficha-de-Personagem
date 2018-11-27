<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->double('deslocamento')->nullable();
            $table->integer('iniciativa')->nullable();
            $table->integer('classe_armadura')->nullable();
            $table->integer('pontos_vida_total')->nullable();
            $table->integer('pontos_vida_temporarios')->nullable();
            $table->integer('nivel')->nullable();
            $table->integer('tendencia')->nullable();
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
            $table->boolean('ckAcro')->default(0);
            $table->boolean('ckArca')->default(0);
            $table->boolean('ckAtle')->default(0);
            $table->boolean('ckAtua')->default(0);
            $table->boolean('ckBlef')->default(0);
            $table->boolean('ckFurt')->default(0);
            $table->boolean('ckHist')->default(0);
            $table->boolean('ckInti')->default(0);
            $table->boolean('ckIntu')->default(0);
            $table->boolean('ckInve')->default(0);
            $table->boolean('ckLida')->default(0);
            $table->boolean('ckMedi')->default(0);
            $table->boolean('ckNatu')->default(0);
            $table->boolean('ckPerc')->default(0);
            $table->boolean('ckPers')->default(0);
            $table->boolean('ckPrest')->default(0);
            $table->boolean('ckReli')->default(0);
            $table->boolean('ckSobr')->default(0);
            $table->String('ligacoes')->nullable();
            $table->String('tracos_personal')->nullable();
            $table->String('ideal')->nullable();
            $table->String('defeito')->nullable();
            $table->String('aparencia')->nullable();
            $table->String('aliados')->nullable();
            $table->String('historia')->nullable();
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('classe_id')->references('id')->on('classes');
            $table->integer('raca_id')->references('id')->on('racas');
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
