<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(StatesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(MainCategorySeeder::class);
        $this->call(IconsSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(AdvertisementSeeder::class);
    }
}
