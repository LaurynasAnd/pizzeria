<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            'vištiena',
            'jautiena',
            'kumpis',
            'šoninė',
            'saliamis',
            'medžiotojų dešrelės',
            'krevetės',
            'pomidorai',
            'žalioji paprika',
            'vyšniniai pomidorai',
            'pievagrybiai',
            'raudonieji svogūnai',
            'marinuoti agurkai',
            'juodosios alyvuogės',
            'ananasai',
            'bruknės',
            'jalapeno griežinėliai',
            'fetos sūris',
            'mocarelos sūris',
            'parmezanas',
            'čederio sūris',
            'granuliuoti česnakai',
            'sūrio padažas',
            'padažas pesto',
            'česnakinis padažas',
            'čili padažas',
            'chipotle padažas',
            'itališkos žolelės',
            'saldžiarūgštis padažas',
            'picų padažas',
            'bbq padažas',
            'sutirštintas pienas',
        ];
        foreach($ingredients as $ingredient){

            DB::table('ingredients')->insert([
                'title' => $ingredient
            ]);
        }
    }
}
