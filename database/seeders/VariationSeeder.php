<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ['description', 'photo', 'price', 'discount_price', 'product_id', 'size_id']
        $variations = [
            ['25 cm, tradicinis padas, 410-450 g', 'pesto-small', 8.75, 1, 1],
            ['30 cm, tradicinis padas, 600-650 g', 'pesto-medium', 10.85, 1, 2],
            ['35 cm, tradicinis padas, 810-850 g', 'pesto-big', 12.95, 1, 3],
            ['25 cm, tradicinis padas, 470-510 g', 'carbonara-small', 8.75, 2, 1],
            ['30 cm, tradicinis padas, 630-670 g', 'carbonara-medium', 10.85, 2, 2],
            ['35 cm, tradicinis padas, 880-920 g', 'carbonara-big', 12.95, 2, 3],
            ['25 cm, tradicinis padas, 390 g', 'fiesta-small', 8.75, 3, 1],
            ['30 cm, tradicinis padas, 590 g', 'fiesta-medium', 10.85, 3, 2],
            ['35 cm, tradicinis padas, 820 g', 'fiesta-big', 12.95, 3, 3],
            ['25 cm, tradicinis padas, 430 g', 'cheesy-chicken-small', 7.75, 4, 1],
            ['30 cm, tradicinis padas, 640 g', 'cheesy-chicken-medium', 9.85, 4, 2],
            ['35 cm, tradicinis padas, 870 g', 'cheesy-chicken-big', 11.95, 4, 3],
            ['25 cm, tradicinis padas, 420 g', 'crazy-small', 8.75, 5, 1],
            ['30 cm, tradicinis padas, 620 g', 'crazy-medium', 10.85, 5, 2],
            ['35 cm, tradicinis padas, 850 g', 'crazy-big', 12.95, 5, 3],
            ['25 cm, tradicinis padas, 400-500 g', 'royal-small', 8.75, 6, 1],
            ['30 cm, tradicinis padas, 500-600 g', 'royal-medium', 10.85, 6, 2],
            ['35 cm, tradicinis padas, 700-800 g', 'royal-big', 12.95, 6, 3],
            ['25 cm, tradicinis padas, 440 g', 'four-seasons-small', 7.75, 7, 1],
            ['30 cm, tradicinis padas, 640 g', 'four-seasons-medium', 9.85, 7, 2],
            ['35 cm, tradicinis padas, 860 g', 'four-seasons-big', 11.95, 7, 3],
            ['25 cm, tradicinis padas, 400-500 g', 'dodo-small', 7.75, 8, 1],
            ['30 cm, tradicinis padas, 600-700 g', 'dodo-medium', 9.85, 8, 2],
            ['35 cm, tradicinis padas, 800-900 g', 'dodo-big', 11.95, 8, 3],
            ['25 cm, tradicinis padas, 450 g', 'chicken-bbq-small', 7.75, 9, 1],
            ['30 cm, tradicinis padas, 670 g', 'chicken-bbq-medium', 9.85, 9, 2],
            ['35 cm, tradicinis padas, 920 g', 'chicken-bbq-big', 11.95, 9, 3],
            ['25 cm, tradicinis padas, 480 g', 'mexican-small', 8.75, 10, 1],
            ['30 cm, tradicinis padas, 720 g', 'mexican-medium', 10.85, 10, 2],
            ['35 cm, tradicinis padas, 990 g', 'mexican-big', 12.95, 10, 3],
            ['25 cm, tradicinis padas, 390 g', 'pepperoni-small', 8.75, 11, 1],
            ['30 cm, tradicinis padas, 570 g', 'pepperoni-medium', 10.85, 11, 2],
            ['35 cm, tradicinis padas, 740 g', 'pepperoni-big', 12.95, 11, 3],
            ['25 cm, tradicinis padas, 480-530 g', 'champion-small', 6.75, 12, 1],
            ['30 cm, tradicinis padas, 540-590 g', 'champion-medium', 8.85, 12, 2],
            ['35 cm, tradicinis padas, 830-880 g', 'champion-big', 10.95, 12, 3],
            ['25 cm, tradicinis padas, 440 g', 'ranch-small', 8.75, 13, 1],
            ['30 cm, tradicinis padas, 660 g', 'ranch-medium', 10.85, 13, 2],
            ['35 cm, tradicinis padas, 940 g', 'ranch-big', 12.95, 13, 3],
            ['25 cm, tradicinis padas, 430 g', 'cheeseburger-small', 7.75, 14, 1],
            ['30 cm, tradicinis padas, 660 g', 'cheeseburger-medium', 9.85, 14, 2],
            ['35 cm, tradicinis padas, 900 g', 'cheeseburger-big', 11.95, 14, 3],
            ['25 cm, tradicinis padas, 500±50 g', 'hawaiian-small', 7.75, 15, 1],
            ['30 cm, tradicinis padas, 690±50 g', 'hawaiian-medium', 9.85, 15, 2],
            ['35 cm, tradicinis padas, 940±50 g', 'hawaiian-big', 11.95, 15, 3],
            ['25 cm, tradicinis padas, 400-500 g', 'spicy-small', 7.75, 16, 1],
            ['30 cm, tradicinis padas, 500-600 g', 'spicy-medium', 9.85, 16, 2],
            ['35 cm, tradicinis padas, 700-800 g', 'spicy-big', 11.95, 16, 3],
            ['25 cm, tradicinis padas, 420 g', 'margherita-small', 6.75, 17, 1],
            ['30 cm, tradicinis padas, 620 g', 'margherita-medium', 8.85, 17, 2],
            ['35 cm, tradicinis padas, 820 g', 'margherita-big', 10.95, 17, 3],
            ['25 cm, tradicinis padas, 380 g', 'seafood-small', 8.75, 18, 1],
            ['30 cm, tradicinis padas, 550 g', 'seafood-medium', 10.85, 18, 2],
            ['35 cm, tradicinis padas, 750 g', 'seafood-big', 12.95, 18, 3],
            ['25 cm, tradicinis padas, 440 g', 'meats-small', 7.75, 19, 1],
            ['30 cm, tradicinis padas, 650 g', 'meats-medium', 9.85, 19, 2],
            ['35 cm, tradicinis padas, 880 g', 'meats-big', 11.95, 19, 3],
            ['25 cm, tradicinis padas, 400-500 g', 'vegetarian-small', 7.75, 20, 1],
            ['30 cm, tradicinis padas, 500-600 g', 'vegetarian-medium', 9.85, 20, 2],
            ['35 cm, tradicinis padas, 700-800 g', 'vegetarian-big', 11.95, 20, 3],
            ['25 cm, tradicinis padas, 360 g', 'cheese-small', 6.75, 21, 1],
            ['30 cm, tradicinis padas, 530 g', 'cheese-medium', 8.85, 21, 2],
            ['35 cm, tradicinis padas, 690 g', 'cheese-big', 10.95, 21, 3],
            ['25 cm, tradicinis padas, 340 g', 'pizza-pie-small', 6.75, 22, 1],
            ['30 cm, tradicinis padas, 520 g', 'pizza-pie-medium', 8.85, 22, 2],
            ['35 cm, tradicinis padas, 720 g', 'pizza-pie-big', 10.95, 22, 3],
        ];

        foreach($variations as $var){

            DB::table('variations')->insert([
                'description' => $var[0],
                'photo' => $var[1].'.jpg',
                'price' => $var[2],
                'discount_price' => 0,
                'product_id' => $var[3],
                'size_id' => $var[4],
            ]);
        }
    }
}
