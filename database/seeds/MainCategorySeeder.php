<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_categories')->insert([
            'maincategory' => 'All Category', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('main_categories')->insert([
            'maincategory' => 'cars & Bikes', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('main_categories')->insert([
            'maincategory' => 'Mobiles & Tablets', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('main_categories')->insert([
            'maincategory' => 'Electronics & Appliances', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
