<?php

use Illuminate\Database\Seeder;

class Classes_has_MagiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes_has_magias')->insert([
            'classe_id' =>'1',
            'magia_id' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'vis'=>'1'
        ]);
    }
}
