<?php

use Illuminate\Database\Seeder;

class MagiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('magias')->insert([
            'nome' => 'Auxílio Divino',
            'descricao' => 'As suas orações o revestem com um esplendor divino. Até o término da magia, todos os seus ataques com arma causam um dano extra de 1d4 radiante se acertar.',
            'conjuradores_mag' => 'Paladino',
            'nivel_mag' => '1',
            'escola_mag' => 'Evocação',
            'tempo_mag' => '1 Ação bônus',
            'componentes_mag' => 'Verbal, Somatico',
            'alcance_mag' => 'Pessoal',
            'duracao_mag' => 'Concentração, dura até 1 minuto',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
            ]);
            DB::table('magias')->insert([
                'nome' => 'Criar Comida e Água',
                'descricao' => 'Você cria 20 kg de comida e 110 litros de água no chão ou em um recipiente dentro do alcance da magia, o bastante para alimentar e sustentar até 15 humanoides ou 5 cavalos por 24 horas.',
                'conjuradores_mag' => 'Clérigo, Paladino',
                'nivel_mag' => '3',
                'escola_mag' => 'Conjuração',
                'tempo_mag' => '1 Ação',
                'componentes_mag' => 'Verbal, Somatico',
                'alcance_mag' => '9 Metros(6 quadrados)',
                'duracao_mag' => 'Instantânea',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'vis'=>'1'
                ]);
                DB::table('magias')->insert([
                    'nome' => 'Escudo Arcano',
                    'descricao' => 'Uma barreira invisível de força mágica surge e protege você. Até o começo do seu próximo turno, você ganha um bônus de +5 na CA, e você não sofre dano dos mísseis mágicos.',
                    'conjuradores_mag' => 'Feiticeiro, Mago',
                    'nivel_mag' => '1',
                    'escola_mag' => 'Abjuração',
                    'tempo_mag' => '1 reação, você ativa quando for
                    alvo de um ataque ou da magia mísseis mágicos',
                    'componentes_mag' => 'Verbal, Somatico',
                    'alcance_mag' => 'Pessoal',
                    'duracao_mag' => '1 Rodada',
                    'created_at' => date('Y-m-d h:i:s'),
                    'updated_at' => date('Y-m-d h:i:s'),
                    'vis'=>'1'
                    ]);    
    }
}
