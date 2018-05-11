<?php

use Illuminate\Database\Seeder;

class Classes_has_ProficienciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes_has_proficiencias')->insert([
            'classe_ID' =>'1',
            'proficiencia_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
