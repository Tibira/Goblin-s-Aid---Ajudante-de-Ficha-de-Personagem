<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AntecedentesTableSeeder::class);
        $this->call(ArmadurasTableSeeder::class);
        $this->call(ArmasTableSeeder::class);
        $this->call(CaracteristicasTableSeeder::class);
        $this->call(Classes_has_MagiasSeeder::class);
        $this->call(Classes_has_PericiasSeeder::class);
        $this->call(Classes_has_ProficienciasSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(DefinicoesTableSeeder::class);
        $this->call(Equipamentos_has_ArmadurasSeeder::class);
        $this->call(Equipamentos_has_ArmasSeeder::class);
        $this->call(Equipamentos_has_ItensSeeder::class);
        $this->call(EquipamentosSeeder::class);
        $this->call(FichasTableSeeder::class);
        $this->call(Ficha_has_AntecedentesSeeder::class);
        $this->call(Ficha_has_ClassesSeeder::class);
        $this->call(Ficha_has_RacasSeeder::class);
        $this->call(Ficha_has_TalentosSeeder::class);
        $this->call(ItensTableSeeder::class);
        $this->call(MagiasTableSeeder::class);
        $this->call(PericiasTableSeeder::class);
        $this->call(ProficienciasTableSeeder::class);
        $this->call(RacasTableSeeder::class);
        $this->call(TalentosTableSeeder::class);
        
    }
}
