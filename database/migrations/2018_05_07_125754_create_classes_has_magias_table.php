<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesHasMagiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes_has_magias', function (Blueprint $table) {
            $table->integer('magia_id')->references('id')->on('magias');
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
