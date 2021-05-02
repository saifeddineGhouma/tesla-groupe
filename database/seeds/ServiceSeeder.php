<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => "Réseaux MT/BT ",
            'company_id'=>1
            ]);
        DB::table('services')->insert([
            'name' => "Poste transformateurs  ",
            'company_id'=>1
            ]);
        DB::table('services')->insert([
            'name' => "Groupe électrogène ",
            'company_id'=>1
            ]);
        DB::table('services')->insert([
            'name' => "Câblage des armoires électriques ",
            'company_id'=>1
            ]);
        DB::table('services')->insert([
            'name' => "Eclairages publics ",
            'company_id'=>1
            ]);
        DB::table('services')->insert([
            'name' => "Eclairages publics ",
            'company_id'=>1
            ]);
    }
    
}
