<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['pizza', 'snack', 'dessert', 'drink'] as $size){

            DB::table('categories')->insert([
                'title' => $size
            ]);
        }
    }
}
