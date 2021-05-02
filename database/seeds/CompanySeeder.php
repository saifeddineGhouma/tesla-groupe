<?php

use Illuminate\Database\Seeder;
//use DB ;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        DB::table('companies')->insert([
            'name' => "Tesla Consulting  ",
            'local' => "5 rue boughazia, RC, Bureau N°1, Lafayette, Tunis",
            'adress' => "data",
            'logo' => "logo",
            'description' => "Tesla Consulting est un bureau d’étude technique en électricité, qui vous offre une analyse professionnelle, consciencieuse, cohérente et réaliste, dans un délai optimal et pour un prix avantageux, en relation directe avec les prix du marché, afin de répondre adéquatement à vos attentes. ",
        ]);
        DB::table('companies')->insert([
            'name' => "Tesla Plast  ",
            'local' => "zone industrielle, Bizerete",
            'adress' => "data",
            'logo' => "logo",
            'description' => "Tesla Plast est une usine, fabricant et producteur de matériels électriques.  Nous mettrons tout en œuvre pour garantir une performance et une sécurité optimales. ",
        ]);
        DB::table('companies')->insert([
            'name' => "Tesla Trending",
            'local' => "5 rue boughazia, RC, Bureau N°1, Lafayette, Tunis",
            'adress' => "data",
            'logo' => "logo",
            'description' => "Tesla Trending assure la vente en gros de matériels électriques, entre autre elle fortifie la marchandise de Tesla Plast, en parallèle avec les autres marchés. ",
        ]);
    }
}
