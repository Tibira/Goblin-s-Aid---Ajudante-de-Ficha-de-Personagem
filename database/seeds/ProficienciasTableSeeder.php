<?php

use Illuminate\Database\Seeder;

class ProficienciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proficiencias')->insert([
            'nome_pro' =>'Armadura leve',
            'descricao_pro' =>'Você tem mais facilidade em se locomover com armaduras leves.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('proficiencias')->insert([
            'nome_pro' =>'Armas simples',
            'descricao_pro' =>'Você tem mais facilidade em manusear armas simples.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
