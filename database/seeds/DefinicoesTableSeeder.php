<?php

use Illuminate\Database\Seeder;

class DefinicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definicoes')->insert([
            'item' => 'força',
            'definicao' => 'Força é um atributo que você usa para arombar portas ou abrir um jarro de picles.',
        'vis'=>'1']);
        DB::table('definicoes')->insert([
            'item' => 'destreza',
            'definicao' => 'Destreza é um atributo que você usa para desviar de um ataque ou se equilibrar em uma corda.',
        'vis'=>'1']);
    }
}
