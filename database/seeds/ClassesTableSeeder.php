<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'nome_cla' => 'Guerreiro',
            'descricao_cla' => 'Guerreiros aprendem o básico de todos os estilos de combate. Eles podem ser tão rápidos quanto fortes.',
            'dado_vida' => '1D10',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('classes')->insert([
            'nome_cla' => 'Druida',
            'descricao_cla' => 'Os druidas reverenciam a natureza acima de tudo, adquirindo suas magias e outros poderes mágicos, ou da força da natureza per si ou de uma divindade da natureza.',
            'dado_vida' => '1D8',
            'truques' => '3',
            'nivel1' => '2',
            'nivel2' => '1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
