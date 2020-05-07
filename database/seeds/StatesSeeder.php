<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'stateName' => 'Lagos',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Abuja',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Cross River',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Rivers State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Delta',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Enugu',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Abia',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Akwa Ibom',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Adamawa',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Bauchi State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Bayelsa',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Benue',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Borno',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Ebonyi',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Edo State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Ekiti',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Gombe',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Imo',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Jigawa',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Kaduna',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Kano',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Katsina',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Kebbi',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Kogi State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Kwara',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Nasarawa',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Niger State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Ogun State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Ondo',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Osun State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Oyo State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Plateau State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Sokoto',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Taraba State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Yobe State',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('states')->insert([
            'stateName' => 'Zamfara',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
