<?php

use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristicas')->insert([
            'nome_car' => 'Circulo Druídico',
            'descricao_car' => 'Você escolhe se identificar com um círculo de druidas: o Círculo da Terra ou o Círculo da Lua, ambos detalhados no final da descrição da classe.',
            'nivel' => '2',
            'classe_id'=>'2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
        DB::table('caracteristicas')->insert([
            'nome_car' => 'Druídico',
            'descricao_car' => 'Voce conhece o idioma Druídico conhecido apenas pelos Druidas.',
            'nivel' => '1',
            'classe_id'=>'2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('caracteristicas')->insert([
            'nome_car' => 'Retomar Folego',
            'descricao_car' => 'No seu turno, você
            pode usar uma ação bônus para recuperar pontos de vida
            igual a 1d10 + seu nível de guerreiro.',
            'nivel' => '1',
            'classe_id'=>'1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('caracteristicas')->insert([
            'nome_car' => 'Surto de Ação',
            'descricao_car' => 'Durante o seu turno,
            você pode realizar uma ação adicional juntamente com
            sua ação e possível ação bônus.',
            'nivel' => '1',
            'classe_id'=>'1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
