<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['small', 'medium', 'large'] as $size){

            DB::table('sizes')->insert([
                'title' => $size
            ]);
        }
    }
}
