<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'icons' => '', 
            'categoryid' => '1', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('icons')->insert([
            'icons' => '<i class="fa fa-motorcycle" aria-hidden="true"></i>', 
            'categoryid' => '2', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('icons')->insert([
            'icons' => '<i class="fa fa-tablet" aria-hidden="true"></i>', 
            'categoryid' => '3', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('icons')->insert([
            'icons' => '<i class="fa fa-desktop" aria-hidden="true"></i>', 
            'categoryid' => '4', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('icons')->insert([
            'icons' => '<i class="fa fa-home" aria-hidden="true"></i>', 
            'categoryid' => '5', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('icons')->insert([
            'icons' => '<i class="fa fa-user-md" aria-hidden="true"></i>', 
            'categoryid' => '6', 
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
