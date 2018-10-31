<?php

use Illuminate\Database\Seeder;

class FichasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fichas')->insert([
            'nome_per' => 'Robinho',
            'tendencia' => 'Caótico Neutro',
            'deslocamento' => '9',
            'iniciativa' => '8',
            'classe_armadura' => '15',
            'pontos_vida_total' => '10',
            'pontos_vida_temporarios' => '10',
            'nivel' => '1',
            'bon_proficiencia' => '2',
            'experiencia' => '0',
            'idiomas' => 'Comum, Dracônico',
            'forca' => '10',
            'destreza' => '12',
            'inteligencia' => '14',
            'sabedoria' => '8',
            'carisma' => '6',
            'constituicao' => '10',
            'tesouros' => 'Uma espada de família',
            'pcobre' => '14',
            'pprata' => '13',
            'peletron' => '12',
            'pouro' => '11',
            'pplatina' => '15',
            'user_id' => '1',
            'classe_id' => '1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1'
        ]);
        DB::table('fichas')->insert([
            'nome_per' => 'Bob',
            'tendencia' => 'Caótico Neutro',
            'deslocamento' => '9',
            'iniciativa' => '8',
            'classe_armadura' => '15',
            'pontos_vida_total' => '10',
            'pontos_vida_temporarios' => '10',
            'nivel' => '1',
            'bon_proficiencia' => '2',
            'experiencia' => '0',
            'idiomas' => 'Comum, Dracônico',
            'forca' => '10',
            'destreza' => '12',
            'inteligencia' => '14',
            'sabedoria' => '8',
            'carisma' => '6',
            'constituicao' => '10',
            'tesouros' => 'Uma espada de família',
            'pcobre' => '14',
            'pprata' => '13',
            'peletron' => '12',
            'pouro' => '11',
            'pplatina' => '15',
            'user_id' => '1',
            'classe_id' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1'
        ]);
        DB::table('fichas')->insert([
            'nome_per' => 'Tobias',
            'tendencia' => 'Caótico Neutro',
            'deslocamento' => '9',
            'iniciativa' => '8',
            'classe_armadura' => '15',
            'pontos_vida_total' => '10',
            'pontos_vida_temporarios' => '10',
            'nivel' => '1',
            'bon_proficiencia' => '2',
            'experiencia' => '0',
            'idiomas' => 'Comum, Dracônico',
            'forca' => '10',
            'destreza' => '12',
            'inteligencia' => '14',
            'sabedoria' => '8',
            'carisma' => '6',
            'constituicao' => '10',
            'ckIntu' => '1',
            'ckNatu' => '1',
            'ckFurt' => '1',
            'ckSobr' => '1',
            'tesouros' => 'Uma espada de família',
            'pcobre' => '14',
            'pprata' => '13',
            'peletron' => '12',
            'pouro' => '11',
            'pplatina' => '15',
            'user_id' => '2',
            'classe_id' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1'
        ]);
    }
}
