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
            'item' => 'Força',
            'definicao' => 'Força é um atributo que você usa para arombar portas ou abrir um jarro de picles.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1']);
        DB::table('definicoes')->insert([
            'item' => 'Destreza',
            'definicao' => 'Destreza é um atributo que você usa para desviar de um ataque ou se equilibrar em uma corda.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),    
            'vis'=>'1']);
    }
}
