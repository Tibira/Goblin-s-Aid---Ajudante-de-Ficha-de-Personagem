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
            'nome_arm' => 'Maça',
            'tipo_arm' => 'Contusão',
            'dano_arm' => '1D6',
            'preco_arm' => '5PO',
            'peso_arm' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
            
        DB::table('armas')->insert([
            'nome_arm' => 'Espada longa',
            'tipo_arm' => 'Cortante',
            'dano_arm' => '1D8',
            'preco_arm' => '15PO',
            'peso_arm' => '1',
            'propiedade' => 'Versatil(1D10)',
            'efeito_adicional' => '+5 Dano Congelante',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
    }
}
