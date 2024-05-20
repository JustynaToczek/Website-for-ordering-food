<?php

namespace Database\Seeders;

use App\Models\Delivery_address;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CitySeeder::class,
            RestaurantSeeder::class,
            DishSeeder::class,
            DeliveryAddressSeeder::class,
            OrderSeeder::class,
            OrderedDishSeeder::class,
        ]);
    }
}
