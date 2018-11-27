<?php

use Illuminate\Database\Seeder;

class RacasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('racas')->insert([
            'nome' => 'Anão',

            'descricao' => 'Reinos ricos de antiga grandeza, salões esculpidos nas raízes das montanhas, o eco de picaretas e martelos nas minas profundas e nas forjas ardentes, um compromisso com o clã e a tradição, e um ódio impetuoso contra goblins e orcs – essas linhas comuns unem todos os anões.',

            'tracos_raciais' => 'Aumenta a Constituição em 2 pontos.
            Idade: Anões são considerados jovens até atingirem a idade de 50 anos. Em média, eles vivem 350 anos.
            Tendência: A maioria dos anões é leal. Eles tendem para o bem, com um forte senso de honestidade.
            Tamanho: Anões estão entre 1,20 e 1,50 metro de altura e pesam cerca de 75 kg. Seu tamanho é Médio.
            Idiomas: Anões podem falar, ler e escrever Comum e Anão.',
            'habilidade' => 'constituicao',
            
            'val_hab' => '2',
            
            'deslocamento' => '7.5',
            
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('racas')->insert([
            'nome' => 'Humano',

            'descricao' => 'Os humanos são a mais jovem das raças comuns. Talvez seja por causa de suas vidas mais curtas que eles se esforcem para alcançar o máximo que podem nos anos que têm. Ou talvez eles sintam que têm algo a provar às raças mais antigas, e é por esta razão que eles constroem seus poderosos impérios através da conquista e do comércio. O que quer que os motive, os humanos são os inovadores, os realizadores e os pioneiros dos mundos.',
            
            'tracos_raciais' => 'Idade: Os humanos chegam à idade adulta no final da adolescência e vivem menos de um século.
            Tendência: Os humanos não possuem inclinação a nenhuma tendência em especial. Os melhores e os piores são encontrados entre eles.
            Idiomas: Você pode falar, ler e escrever Comum e outro idioma adicional, à sua escolha.',
            
            'habilidade' => 'forca;
            destreza;
            inteligencia;
            sabedoria;
            constituicao;
            carisma',
            
            'val_hab' => '1',
            
            'deslocamento' => '9',
            
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
