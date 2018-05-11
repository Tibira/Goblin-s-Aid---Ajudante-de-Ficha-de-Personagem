<?php

use Illuminate\Database\Seeder;

class Ficha_has_PersonalizacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ficha_has_personalizacao')->insert([
            'ficha_ID' =>'1',
            'personalizacao_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
