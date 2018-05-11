<?php

use Illuminate\Database\Seeder;

class Ficha_has_RacasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ficha_has_racas')->insert([
            'ficha_ID' =>'1',
            'raca_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
