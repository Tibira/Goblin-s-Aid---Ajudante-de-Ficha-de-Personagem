<?php

use Illuminate\Database\Seeder;

class AntecedentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('antecedentes')->insert([
            'nome_ant' => 'Artesão da guilda',
            'descricao_ant' => 'Você é membro da guilda de artesãos, perito em um campo específico e intimamente associado a outros artesãos',
            'itens_ant' => 'Um conjunto de ferramentas de artesão
            (à sua escolha), uma carta de apresentação da sua
            guilda, um conjunto de roupas de viajante e uma
            algibeira com 15 po',
            'pericias_ant' => 'Intuição, Persuasão',
            'proficiencias_ant' => 'Um tipo de ferramenta
            de artesão',
            'idiomas_ant' => 'Uma, à sua escolha',
            'carac_extras_ant' => 'ASSOCIADOS DA GUILDA Como um membro cativo e respeitado da guilda, você pode contar com certos benefícios que a sociedade garante.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
            
            DB::table('antecedentes')->insert([
                'nome_ant' => 'Criminoso',
                'descricao_ant' => 'Você é um criminoso experiente com um histórico de
                contravenções.',
                'itens_ant' => 'Um pé de cabra, um conjunto de roupas
                escuras comuns com capuz e uma algibeira contendo
                15 po',
                'pericias_ant' => 'Intuição, Persuasão',
                'proficiencias_ant' => 'Um tipo de kit de jogo,
                ferramentas de ladrão',
                'carac_extras_ant' => 'CONTATO CRIMINAL: Você possui contatos de confiança que agem como seus informantes em uma rede criminosa.',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
                ]);
       
    }
}
