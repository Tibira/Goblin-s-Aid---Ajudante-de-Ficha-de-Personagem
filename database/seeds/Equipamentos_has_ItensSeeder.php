<?php

use Illuminate\Database\Seeder;

class Equipamentos_has_ItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipamentos_has_itens')->insert([
            'equipamento_id' =>'1',
            'item_id' =>'1',    
            'quantidade' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
        DB::table('equipamentos_has_itens')->insert([
            'equipamento_id' =>'1',
            'item_id' =>'2',    
            'quantidade' =>'2   ',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
