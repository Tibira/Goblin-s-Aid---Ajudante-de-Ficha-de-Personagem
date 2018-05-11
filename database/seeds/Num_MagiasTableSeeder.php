<?php

use Illuminate\Database\Seeder;

class Num_MagiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('num_magias')->insert([
            'truques' => '2',
            'nivel1' => '0',
            'nivel2' => '0',
            'nivel3' => '0',
            'nivel4' => '0',
            'nivel5' => '0',
            'nivel6' => '0',
            'nivel7' => '0',
            'nivel8' => '0',
            'nivel9' => '0',
            'classe_ID' => '2',
            'nivel' => '1',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]); 
        DB::table('num_magias')->insert([
            'truques' => '3',
            'nivel1' => '0',
            'nivel2' => '0',
            'nivel3' => '0',
            'nivel4' => '0',
            'nivel5' => '0',
            'nivel6' => '0',
            'nivel7' => '0',
            'nivel8' => '0',
            'nivel9' => '0',
            'classe_ID' => '2',
            'nivel' => '2',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]); 
        DB::table('num_magias')->insert([
            'truques' => '4',
            'nivel1' => '2',
            'nivel2' => '0',
            'nivel3' => '0',
            'nivel4' => '0',
            'nivel5' => '0',
            'nivel6' => '0',
            'nivel7' => '0',
            'nivel8' => '0',
            'nivel9' => '0',
            'classe_ID' => '2',
            'nivel' => '3',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]); 
        DB::table('num_magias')->insert([
            'truques' => '4',
            'nivel1' => '3',
            'nivel2' => '0',
            'nivel3' => '0',
            'nivel4' => '0',
            'nivel5' => '0',
            'nivel6' => '0',
            'nivel7' => '0',
            'nivel8' => '0',
            'nivel9' => '0',
            'classe_ID' => '2',
            'nivel' => '4',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]); 
    }
}
