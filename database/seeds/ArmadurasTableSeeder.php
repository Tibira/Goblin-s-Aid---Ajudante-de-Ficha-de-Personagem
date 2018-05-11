<?php

use Illuminate\Database\Seeder;

class ArmadurasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armaduras')->insert([
            'nome_armd' => 'Cota de Malha',
            'descricao_armd' => 'Armadura feita com pequenos aneis de metal.',
            'preco_armd' => '75 PO',
            'peso_armd' => '27.5',
            'class_armad' => '16',
            'forca' => '13',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
        DB::table('armaduras')->insert([
            'nome_armd' => 'Placas',
            'descricao_armd' => 'Armadura feita de placas de aço, extremamente resistente',
            'preco_armd' => '1500 PO',
            'peso_armd' => '32.5',
            'class_armad' => '18',
            'forca' => '15',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
        DB::table('armaduras')->insert([
            'nome_armd' => 'Escudo de Madeira',
            'descricao_armd' => 'Um escudo feito de madeira, bem leve e resistente',
            'preco_armd' => '10 PO',
            'peso_armd' => '3',
            'class_armad' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
    }
}
