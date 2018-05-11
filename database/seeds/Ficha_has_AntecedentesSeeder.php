<?php

use Illuminate\Database\Seeder;

class Ficha_has_AntecedentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ficha_has_antecedentes')->insert([
            'ficha_ID' =>'1',
            'antecedente_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
