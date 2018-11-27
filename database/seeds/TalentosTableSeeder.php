<?php

use Illuminate\Database\Seeder;

class TalentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talentos')->insert([
            'nome' => 'Alerta',
            'descricao' => 'Sempre a espera de perigo, você ganha os seguintes
            benefícios:
            Você recebe +5 de bônus em iniciativa.
            Você não pode ser surpreso enquanto estiver
            consciente.
            Outras criaturas não ganham vantagem nas jogadas
            de ataque contra você por estarem escondidas de você.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('talentos')->insert([
            'nome' => 'Especialista em Besta',
            'descricao' => 'Graças a sua pratica extensiva com bestas, você ganha os seguintes benefícios:
            Você ignora a qualidade de recarga de bestas nas quais você é proficiente. Estar a 1,5 metro de uma criatura hostil não impõem desvantagem nas suas jogadas de ataque à distância. Quando você usa a ação de Ataque e ataca com uma arma de uma mão, você pode usar sua ação bônus para atacar com uma besta de mão carregada que você esteja empunhando.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
