<?php

use Illuminate\Database\Seeder;

class Ficha_has_TalentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ficha_has_talentos')->insert([
            'ficha_ID' =>'1',
            'talento_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
