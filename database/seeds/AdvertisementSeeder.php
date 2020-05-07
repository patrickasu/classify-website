<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            'maincategoryid' => '2', 
            'subcategoryid' => '1',  
            'productname' => '2008 Nissan maxima',
            'yearofpurchase' => '2017', 
            'price' => '950, 000',
            'name' => 'Michael Joshua', 
            'mobile' => '08094456235',   
            'email' => 'joshuamic@gmail.com',  
            'state' => '1', 
            'city' => 'Ikeja', 
            'photos' => '/img/nissan.jpg,/img/nissan2.jpg,/img/nissan3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '9',  
            'productname' => 'Bowers Ziky Speakers',
            'yearofpurchase' => '2010', 
            'price' => '70, 000',
            'name' => 'Francis Ike', 
            'mobile' => '07094456235',   
            'email' => 'ikefac@gmail.com',  
            'state' => '3', 
            'city' => 'Calabar South', 
            'photos' => '/img/speaker.jpg,/img/speaker2.jpg,/img/speaker3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '9',  
            'productname' => 'Stryker spine multigen Console',
            'yearofpurchase' => '2019', 
            'price' => '120, 000',
            'name' => 'Timothy Jaky', 
            'mobile' => '07094456235',   
            'email' => 'timothy@gmail.com',  
            'state' => '1', 
            'city' => 'Lekki Phase 1', 
            'photos' => '/img/console.jpg,/img/console2.jpg,/img/console3.jpg,/img/console4.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'Galaxy S20 new in box unopened',
            'yearofpurchase' => '2019', 
            'price' => '95, 000',
            'name' => 'Samuel Giffy', 
            'mobile' => '07094456509',   
            'email' => 'sam@gmail.com',  
            'state' => '1', 
            'city' => 'Victoria Island', 
            'photos' => '/img/samsung.jpg,/img/samsung2.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '9',  
            'productname' => 'PS4 Game Console',
            'yearofpurchase' => '2018', 
            'price' => '180, 000',
            'name' => 'Daniel John', 
            'mobile' => '08164456553',   
            'email' => 'dan@gmail.com',  
            'state' => '1', 
            'city' => 'Ikoyi Lagos', 
            'photos' => '/img/ps4.jpg,/img/ps42.jpg,/img/ps43.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'Apple iPhone 11 Pro Max 256GB',
            'yearofpurchase' => '2020', 
            'price' => '400, 000',
            'name' => 'Gabriel Simon', 
            'mobile' => '07064456735',   
            'email' => 'sam@gmail.com',  
            'state' => '1', 
            'city' => 'Ajah', 
            'photos' => '/img/apple.jpg,/img/apple2.jpg,/img/apple3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'HP (Core i3/i5, Windows 10 Computer)',
            'yearofpurchase' => '2020', 
            'price' => '120, 000',
            'name' => 'Simon Max', 
            'mobile' => '07064456735',   
            'email' => 'sam100@gmail.com',  
            'state' => '3', 
            'city' => 'Calabar Municipality', 
            'photos' => '/img/computer.jpg,/img/computer2.jpg,/img/computer3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '2', 
            'subcategoryid' => '1',  
            'productname' => '58 Nissan Qashqai 1.6 petrol',
            'yearofpurchase' => '2012', 
            'price' => '500, 000',
            'name' => 'Clement Joshua', 
            'mobile' => '08094456235',   
            'email' => 'clement@gmail.com',  
            'state' => '1', 
            'city' => 'Obalende Lagos', 
            'photos' => '/img/1.jpg,/img/2.jpg,/img/3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '9',  
            'productname' => 'Bench or TV stand',
            'yearofpurchase' => '2015', 
            'price' => '20, 000',
            'name' => 'Habor Joe', 
            'mobile' => '07094456451',   
            'email' => 'joe@gmail.com',  
            'state' => '1', 
            'city' => 'Lekki Phase 1', 
            'photos' => '/img/tv.jpg,/img/tv2.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '10',  
            'productname' => 'VTL Wotan Mb1250 Amps',
            'yearofpurchase' => '2010', 
            'price' => '85, 000',
            'name' => 'Chris Vincent', 
            'mobile' => '07094456451',   
            'email' => 'chrisvin@gmail.com',  
            'state' => '1', 
            'city' => 'Iyana Ipaja', 
            'photos' => '/img/e1.jpg,/img/e2.jpg,/img/e3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '2', 
            'subcategoryid' => '2',  
            'productname' => 'Pure Series SingleSpeed bicycle',
            'yearofpurchase' => '2017', 
            'price' => '50, 000',
            'name' => 'Vincent Simon', 
            'mobile' => '07084456599',   
            'email' => 'chrisvin@gmail.com',  
            'state' => '1', 
            'city' => 'Surulere', 
            'photos' => '/img/b1.jpg,/img/b2.jpg,/img/b3.jpg,/img/b4.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'MacBook Pro 15 Retina EXCELLENT',
            'yearofpurchase' => '2019', 
            'price' => '180, 000',
            'name' => 'Timothy Jeffy', 
            'mobile' => '07084456599',   
            'email' => 'jeffy@gmail.com',  
            'state' => '3', 
            'city' => 'Calabar Municipality', 
            'photos' => '/img/c1.jpg,/img/c2.jpg,/img/c3.jpg,/img/c4.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '4', 
            'subcategoryid' => '9',  
            'productname' => 'Duevel Bella Luna Diamante Speakers',
            'yearofpurchase' => '2019', 
            'price' => '75, 000',
            'name' => 'David Peter', 
            'mobile' => '08154456422',   
            'email' => 'peterdav@gmail.com',  
            'state' => '1', 
            'city' => 'Ajah', 
            'photos' => '/img/s1.jpg,/img/s2.jpg,/img/s3.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'Dell Latitude 7390 2-1 touchscreen laptop',
            'yearofpurchase' => '2010', 
            'price' => '130, 000',
            'name' => 'Timothy Jeffy', 
            'mobile' => '07084456599',   
            'email' => 'jeffy@gmail.com',  
            'state' => '3', 
            'city' => 'Calabar South', 
            'photos' => '/img/d1.jpg,/img/d2.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('advertisements')->insert([
            'maincategoryid' => '3', 
            'subcategoryid' => '6',  
            'productname' => 'New Samsung s20 ultra mobile',
            'yearofpurchase' => '2019', 
            'price' => '80, 000',
            'name' => 'John Daniel', 
            'mobile' => '07064456732',   
            'email' => 'dan@gmail.com',  
            'state' => '1', 
            'city' => 'Iyana Ipaja', 
            'photos' => '/img/i1.jpg,/img/i2.jpg',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
