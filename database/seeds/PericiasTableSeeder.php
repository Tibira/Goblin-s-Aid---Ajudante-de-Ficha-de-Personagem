<?php

use Illuminate\Database\Seeder;

class PericiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pericias')->insert([
            'nome_per' =>'Adestrar Animais',
            'descricao_per' =>'Você tem mais facilidade em domar e acalmar animais.',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
        DB::table('pericias')->insert([
            'nome_per' =>'Intimidação',
            'descricao_per' =>'Você tem mais facilidade em intimidar seus inimigos.',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
