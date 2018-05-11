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
            'nome_itm' => 'Aljava',
            'descricao_itm' => 'Aljavas são feitas de couro, podem carregar até 20 flechas',
            'preco_itm' => '1PO',
            'peso_itm' => '0.5',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
        DB::table('itens')->insert([
            'nome_itm' => 'Poção de cura',
            'descricao_itm' => 'Um pequeno frasco de vidro com um liquido curativo dentro. Cura 2D4+2 de pontos de vida',
            'preco_itm' => '50PO',
            'peso_itm' => '0.25',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
    }
}
