<?php

use Illuminate\Database\Seeder;

class ArmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armas')->insert([
            'nome' => 'Maça',
            'descricao' => 'Uma bola de aço com espinhos e um punhal',
            'tipo_arm' => 'Contusão',
            'dano_arm' => '1D6',
            'preco_arm' => '5 Peças de Ouro',
            'peso_arm' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
            
        DB::table('armas')->insert([
            'nome' => 'Espada longa',
            'descricao' => 'Um objeto cortante de metal',
            'tipo_arm' => 'Cortante',
            'dano_arm' => '1D8',
            'preco_arm' => '15 Peças de Ouro',
            'peso_arm' => '1',
            'propiedade' => 'Versatil(1D10)',
            'efeito_adicional' => '+5 Dano Congelante',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
    }
}
