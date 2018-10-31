<?php

use Illuminate\Database\Seeder;

class ItensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itens')->insert([
            'nome' => 'Aljava',
            'descricao' => 'Aljavas são feitas de couro, podem carregar até 20 flechas',
            'preco_itm' => '1 Peças de Ouro',
            'peso_itm' => '0.5',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
        DB::table('itens')->insert([
            'nome' => 'Poção de cura',
            'descricao' => 'Um pequeno frasco de vidro com um liquido curativo dentro. Cura 2D4+2 de pontos de vida',
            'preco_itm' => '50 Peças de Ouro',
            'peso_itm' => '0.25',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
    }
}
