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
            'nome' =>'Adestrar Animais',
            'descricao' =>'Você tem mais facilidade em domar e acalmar animais.',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('pericias')->insert([
            'nome' =>'Intimidação',
            'descricao' =>'Você tem mais facilidade em intimidar seus inimigos.',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
