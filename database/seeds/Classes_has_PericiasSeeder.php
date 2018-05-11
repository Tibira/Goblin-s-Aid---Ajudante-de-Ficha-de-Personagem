<?php

use Illuminate\Database\Seeder;

class Classes_has_PericiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes_has_pericias')->insert([
            'classe_ID' =>'1',
            'pericia_ID' =>'1',    
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s')
        ]);
    }
}
