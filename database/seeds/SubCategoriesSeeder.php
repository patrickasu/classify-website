<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([   
            'subcategory' => 'Commercial Vehicles', 
            'maincategoryid' => '2', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Bikes & Scooters', 
            'maincategoryid' => '2', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Cars', 
            'maincategoryid' => '2', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Other Vehicles', 
            'maincategoryid' => '2', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Mobile Phones', 
            'maincategoryid' => '3', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Tablets', 
            'maincategoryid' => '3', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Assesories', 
            'maincategoryid' => '3', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Wearables', 
            'maincategoryid' => '3', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Home Appliances', 
            'maincategoryid' => '4', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Refrigerators or Fridges', 
            'maincategoryid' => '4', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Washing Machine', 
            'maincategoryid' => '4', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('sub_categories')->insert([ 
            'subcategory' => 'Air Conditioners or Ac', 
            'maincategoryid' => '4', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
