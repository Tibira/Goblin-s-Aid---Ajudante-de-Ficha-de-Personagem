<?php

use Illuminate\Database\Seeder;

class Ficha_has_ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ficha_has_classes')->insert([
            'ficha_ID' =>'1',
            'classe_ID' =>'1',    
            'nivel' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
