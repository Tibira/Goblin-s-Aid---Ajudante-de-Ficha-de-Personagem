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
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
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
                'updated_at' => date('Y-m-d h:i:s'),
                'vis'=>'1'
                ]);
                DB::table('antecedentes')->insert([
                    'nome_ant' => 'Eremita',
                    'descricao_ant' => 'Você viveu em reclusão – ou em uma comunidade isolada
                    como um monastério ou completamente sozinho – por um
                    período importante da sua vida. No tempo em que passou
                    longe do clamor da sociedade, você encontrou quietude,
                    solidão e, talvez, algumas das respostas que procurava.',
                    'itens_ant' => 'Um estojo de pergaminho cheio de notas dos seus estudos e orações, um cobertor de inverno, um conjunto de roupas comuns, um kit de herbalismo
                    e 5 po.',
                    'pericias_ant' => 'Medicina, Religião',
                    'idiomas_ant' => 'Uma, à sua escolha',        
                    'proficiencias_ant' => 'Kit de herbalismo',
                    'carac_extras_ant' => 'VIDA DE ISOLAMENTO Você pode trabalhar com o Mestre para definir a natureza exata da sua reclusão para determinar a razão por trás do seu isolamento.',
                    'created_at' => date('Y-m-d h:i:s'),
                    'updated_at' => date('Y-m-d h:i:s'),
                    'vis'=>'0'
                    ]);
       
    }
}
