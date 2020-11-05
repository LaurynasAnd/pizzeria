<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            //['title', 'photo', 'price', 'category_id']
            ['pesto', 'pesto', 8.75, 1],
            ['carbonara', 'carbonara', 8.75, 1],
            ['fiesta', 'fiesta', 8.75, 1],
            ['cheesy chicken', 'cheesy-chicken', 7.75, 1],
            ['crazy', 'crazy', 8.75, 1],
            ['royal', 'royal', 8.75, 1],
            ['4 seasons', 'four-seasons', 7.75, 1],
            ['dodo', 'dodo', 7.75, 1],
            ['chicken BBQ', 'chicken-bbq', 7.75, 1],
            ['mexican', 'mexican', 8.75, 1],
            ['pepperoni', 'pepperoni', 8.75, 1],
            ['champion', 'champion', 6.75, 1],
            ['ranch', 'ranch', 8.75, 1],
            ['cheeseburger', 'cheeseburger', 7.75, 1],
            ['hawaiian', 'hawaiian', 7.75, 1],
            ['spicy', 'spicy', 7.75, 1],
            ['margherita', 'margherita', 6.75, 1],
            ['seafood', 'seafood', 8.75, 1],
            ['the meats', 'meats', 7.75, 1],
            ['vegetarian', 'vegetarian', 7.75, 1],
            ['cheese', 'cheese', 6.75, 1],
            ['picos pyragas', 'pizza-pie', 6.75, 1],
        ];
        $products = [
            ['brusketa su pomidorais, 25cm', 'brusketta', 5.50, 2, 'Brusketa su pomidorais, česnako padažo ir mocarela.'],
            ['cezario salotos', 'salad', 3.50, 2, 'Vištiena, vynuoginiai pomidorai, gūžinės salotos Iceberg, skrebučiai, parmezano sūris, bazilikai ir cezario padažas'],
            ['aštrus dodsteris', 'dodster-spicy', 2.80, 2 , 'Dodsteriai yra unikalus produktas, mūsų išradimas. Atraskite dodsterius. Tai kai kas naujo!'],
            ['dodsteris', 'dodster', 2.80, 2, 'Dodsteriai yra unikalus produktas, mūsų išradimas. Atraskite dodsterius. Tai kai kas naujo!'],
            ['vištienos kepsneliai, 7 vnt.', 'nuggets', 2.75, 2, 'Krosnyje kepti vištienos gabaliukai'],
            ['vištienos kepsneliai, 14 vnt.', 'nuggets', 4.50, 2, 'Krosnyje kepti vištienos gabaliukai'],
            ['aštrūs vištienos sparneliai Buffalo, 7 vnt.', 'buffalo', 4.50, 2, 'Skanūs vištienos sparneliai.'],
            ['bulvytės 300g', 'fries', 2.50, 2, 'Bulvytės 300 g.'],
            ['kukurūzai, 2 vnt.', 'corn', 4.00, 2, 'Dvi sultingos saldžios kukurūzų burbuolės. Pateikiamos su sviestu ir druska.'],
            ['krosnyje kepti bulviniai blyneliai, 8 vnt.', 'potato-pancakes', 2.95, 2, 'Krosnyje kepti bulviniai blyneliai.'],
            ['bandelės su pepperoni, 16 vnt.', 'pepperoni-buns', 4.50, 2, 'Bandelės su pepperoni'],
            ['bandelės su sūriu, 16 vnt.', 'cheese-buns', 4.00, 2, 'Bandelės su sūriu'],
            ['Traškučiai BON CHANCE, su sūriu ir česnaku, 120g', 'chips', 1.50, 2, ''],
            ['PRINGLES Original socker, 165 g', 'pringles', 2.50, 2, ''],
            ['Bandelės su bruknėmis, 16 vnt.', 'berry-buns', 3.00, 3, 'Bandelės su bruknėmis'],
            ['Bandelės su cinamonu, 16 vnt.', 'cinnabuns', 2.50, 3, 'Bandelės su cinamonu'],
            ['cheesecake', 'cheesecake', 2.00, 3, 'Dviejų sluoksnių švelnaus skonio sūrio tortas, iškeptas pagal originalų receptą. Sūrio sluoksnis pagamintas iš minkšto ricotta sūrio, viršus dekoruotas karamelizuotais trupiniais.'],
            ['Šviesus mufinas su šokolado lašais', 'muffin', 1.50, 3, 'Nuostabaus skonio keksiukas su šokolado lašais - idealus pasirinkimas tiek studentui, tiek prezidentui!'],
            ['Braškinė spurga', 'donut-strawberry', 1.50, 3, ''],
            ['Spurga su karamelės įdaru', 'donut-caramel', 1.50, 3, ''],
            ['Spurga su riešutų įdaru', 'donut-nuts', 1.50, 3, ''],
            ['Ledai Ben & Jerry\'s Caramel Chew Chew, 500ml', 'icecream-caramel', 6.95, 3, 'Karameliniai ledai su karamele ir karamelės gabalėliais, aplietais šokoladu.'],
            ['Ledai Ben & Jerry\'s Chocolate Fudge Brownie, 500ml', 'icecream-choco', 6.95, 3, 'Šokoladinio pyrago gabalėliai, sumaišyti su tamsiais ir sodriais šokoladiniais ledais. Skamba kaip sapnas!'],
            ['Ledai Ben & Jerry\'s Netflix & Chill\'d, 465 ml', 'icecream-netflix', 6.95, 3, 'Žemės riešutų skonio ledai pagardinti traškių sūrių krekerių įdaru su tobulaisiais Greyston šokoladinio brownie gabalėliais.'],
            ['Coca-Cola', 'cola-big', 2.50, 4, '1 l'],
            ['Coca-Cola Zero', 'cola-zero', 1.50, 4, '0,5 l'],
            ['Coca-Cola', 'cola', 1.50, 4, '0,5 l'],
            ['fanta', 'fanta', 1.50, 4, '0,5 l'],
            ['sprite', 'sprite', 1.50, 4, '0,5 l'],
            ['Negazuotas vanduo', 'water', 1.30, 4, '0,5 l'],
            ['Gazuotas vanduo', 'water-mineral', 1.30, 4, '0,5 l'],
            ['Pienas MARGĖ, 3,2%, UAT', 'milk', 1.20, 4, '3,2% riebumo pienas, 1 L Apdorotas ultraaukšta temperatūra (UAT), 1 l'],
            ['Įvairių vaisių gėrimas CIDO', 'juice-multi', 2.50, 4, '1 l'],
            ['Apelsinų sultys CIDO 100%', 'juice-orange', 2.50, 4, '1 l'],
            ['Obuolių sultys CIDO 100%', 'juice-apple', 2.50, 4, '1 l'],
            ['Pomidorų sultys CIDO 100%', 'juice-tomato', 2.50, 4, '1 l'],
            ['Pomidorų sultys CIDO 100%', 'juice-tomato', 2.50, 4, '1 l'],
            ['Apelsinų sultys CIDO (100%)', 'juice-orange-small', 1.50, 4, '0,3 l'],
            ['Obuolių sultys CIDO (100%)', 'juice-apple-small', 1.50, 4, '0,3 l'],
            ['Pomidorų sultys CIDO (100%)', 'juice-tomato-small', 1.50, 4, '0,3 l'],
            ['Įvairių vaisių gėrimas FRUTTO', 'juice-multi-small', 1.30, 4, '0,3 l'],
            ['Vasaros uogų sulčių gėrimas FRUTTO', 'juice-berry-small', 1.30, 4, '0,3 l'],
            ['Įvairių vaisių gėrimas CIDO', 'juice-multi-xsmall', 0.60, 4, '0,2 l'],
            ['Fuzetea Lemon', 'ice-tea-lemon', 1.50, 4, '0,5 l'],
            ['Fuzetea Peach', 'ice-tea-peach', 1.50, 4, '0,5 l'],
            ['Fuzetea Green Citrus', 'ice-tea-citrus', 1.50, 4, '0,5 l'],
            ['Nealkoholinis kvietinis BALTAS alus', 'beer-white', 2.00, 4, 'Nealkoholinis kvietinis BALTAS alus, 0,5 l'],
            ['Nealkoholinis šviesusis alus PILSNER', 'beer-pilsner', 2.00, 4, 'Nealkoholinis šviesusis alus PILSNER, 0,5 l'],
            ['Nealkoholinis kokteilis RADLER', 'beer-radler', 2.00, 4, '0,5 l'],
            ['Energinis gėrimas RED BULL', 'redbull', 2.50, 4, '0,25 l'],
        ];
        foreach($pizzas as $pz){

            DB::table('products')->insert([
                'title' => $pz[0],
                'description' => '',
                'photo' => $pz[1].'-small.jpg',
                'price'=> $pz[2],
                'discount_price' => 0,
                'category_id' => $pz[3],
            ]);
        }
        foreach($products as $pr){

            DB::table('products')->insert([
                'title' => $pr[0],
                'description' => ($pr[4]??''),
                'photo' => $pr[1].'.jpg',
                'price'=> $pr[2],
                'discount_price' => 0,
                'category_id' => $pr[3],
            ]);
        }
    }
}
