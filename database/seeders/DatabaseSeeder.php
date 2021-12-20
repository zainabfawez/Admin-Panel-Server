<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        DB::table("users")->insert([ 
            "user_type" => 1,      
            "first_name" => "admin",
            "last_name" => "admin",
            "email" => "admin@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Zainab",
            "last_name" => "Fawez",
            "email" => "customer1@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          
          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Haydar",
            "last_name" => "Nassereddine",
            "email" => "customer2@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          
          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Hadi",
            "last_name" => "Al-Khansa",
            "email" => "customer3@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Hussein",
            "last_name" => "Doulani",
            "email" => "customer4@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Zein",
            "last_name" => "Rachidi",
            "email" => "customer5@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Khalil",
            "last_name" => "Rachidi",
            "email" => "customer6@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);

          DB::table("users")->insert([ 
            "user_type" => 2,      
            "first_name" => "Farah",
            "last_name" => "Chakaron",
            "email" => "customer7@mail.com",
            "password" => '$2y$10$ItUhSjSsnUBOg8WPckLQxeA3IVlz6hjAD/BoHLcimYKPVYWiXBOXG',//qweqwe
          ]);
    }
}
