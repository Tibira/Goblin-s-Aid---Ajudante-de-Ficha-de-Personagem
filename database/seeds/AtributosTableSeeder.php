<?php

use Illuminate\Database\Seeder;

class AtributosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atributos')->insert([
            'forca' => '21',
            'destreza' => '20',
            'inteligencia' => '19',
            'sabedoria' => '18',
            'constituicao' => '17',
            'carisma' => '16',
            'sabedoria_passiva' => '15',
            'ficha_ID'=>'1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
            ]);
    }
}
