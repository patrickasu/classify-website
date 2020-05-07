<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'cityName' => 'Ikeja',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Lekki Phase 1',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ikoyi',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Yaba',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Victoria Island',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Lekki',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ajah',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Surulere',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Obalende',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ogba',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Iyana Ipaja',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Festac',   
            'stateid' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Calabar Municipality',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Calabar South',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ikom',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Boki',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ogoja',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Obudu',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Obubra',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('cities')->insert([
            'cityName' => 'Ugep',   
            'stateid' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
