<?php

use Illuminate\Database\Seeder;

class DefinicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definicoes')->insert([
            'nome' => 'Força',
            'descricao' => 'Força é um atributo que você usa para arombar portas ou abrir um jarro de picles.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Destreza',
            'descricao' => 'Destreza é um atributo que você usa para desviar de um ataque ou se equilibrar em uma corda.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Anão',
            'descricao' => 'Reinos ricos de antiga grandeza, salões esculpidos nas raízes das montanhas, o eco de picaretas e martelos nas minas profundas e nas forjas ardentes, um compromisso com o clã e a tradição, e um ódio impetuoso contra goblins e orcs – essas linhas comuns unem todos os anões.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Humano',
            'descricao' => 'Os humanos são a mais jovem das raças comuns. Talvez seja por causa de suas vidas mais curtas que eles se esforcem para alcançar o máximo que podem nos anos que têm. Ou talvez eles sintam que têm algo a provar às raças mais antigas, e é por esta razão que eles constroem seus poderosos impérios através da conquista e do comércio. O que quer que os motive, os humanos são os inovadores, os realizadores e os pioneiros dos mundos.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Maça',
            'descricao' => 'Uma bola de aço com espinhos e um punhal',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Guerreiro',
            'descricao' => 'Guerreiros aprendem o básico de todos os estilos de combate. Eles podem ser tão rápidos quanto fortes.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Druida',
            'descricao' => 'Os druidas reverenciam a natureza acima de tudo, adquirindo suas magias e outros poderes mágicos, ou da força da natureza per si ou de uma divindade da natureza.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Artesão da guilda',
            'descricao' => 'Você é membro da guilda de artesãos, perito em um campo específico e intimamente associado a outros artesãos',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Criminoso',
            'descricao' => 'Você é um criminoso experiente com um histórico de contravenções.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Eremita',
            'descricao' => 'Você viveu em reclusão – ou em uma comunidade isolada como um monastério ou completamente sozinho – por um período importante da sua vida. No tempo em que passou longe do clamor da sociedade, você encontrou quietude, solidão e, talvez, algumas das respostas que procurava.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Cota de Malha',
            'descricao' => 'Armadura feita com pequenos aneis de metal.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Placas',
            'descricao' => 'Armadura feita de placas de aço, extremamente resistente',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Escudo de Madeira',
            'descricao' => 'Um escudo feito de madeira, bem leve e resistente',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Auxílio Divino',
            'descricao' => 'As suas orações o revestem com um esplendor divino. Até o término da magia, todos os seus ataques com arma causam um dano extra de 1d4 radiante se acertar.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Criar Comida e Água',
            'descricao' => 'Você cria 20 kg de comida e 110 litros de água no chão ou em um recipiente dentro do alcance da magia, o bastante para alimentar e sustentar até 15 humanoides ou 5 cavalos por 24 horas.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Escudo Arcano',
            'descricao' => 'Uma barreira invisível de força mágica surge e protege você. Até o começo do seu próximo turno, você ganha um bônus de +5 na CA, e você não sofre dano dos mísseis mágicos.',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Aljava',
            'descricao' => 'Aljavas são feitas de couro, podem carregar até 20 flechas',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
        DB::table('definicoes')->insert([
            'nome' => 'Poção de cura',
            'descricao' => 'Um pequeno frasco de vidro com um liquido curativo dentro. Cura 2D4+2 de pontos de vida',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis' => '1']);
    }
}
